<?php

// src/Controller/StreamController.php

namespace App\Controller;

use App\Repository\StreamRepository;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Entity\Stream;
use App\Entity\User;
use App\Form\StreamType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MessageStream;
use App\Form\MessageStreamType;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\PublisherInterface;
//use App\Service\WebSocketClient;

use App\Service\WebSocketClient;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\WebSocketServer;
use Psr\Log\LoggerInterface;



class StreamController extends AbstractController
{

    private $webSocketClient;
    private $params;
    private $logger;

    public function __construct(WebSocketClient $webSocketClient, ParameterBagInterface $params, LoggerInterface $logger)
    {
        $this->webSocketClient = $webSocketClient;
        $this->params = $params;
        $this->logger = $logger;
    }
    #[Route("/stream", name: "stream_index")]
    public function index(StreamRepository $streamRepository): Response
    {
        // Fetch all active streams
        $activeStreams = $streamRepository->findAllActiveStreams();

        return $this->render('stream/view_streams.html.twig', [
            'activeStreams' => $activeStreams,
        ]);
    }

    // #[Route("/stream/create", name: "stream_create")]
    // public function create(Request $request, EntityManagerInterface $entityManager): Response
    // {
    //     // Get the authenticated user
    //     $user = $this->getUser();

    //     // Create a new Stream instance with the authenticated user
    //     $stream = new Stream($user, '');

    //     // Create the form
    //     $form = $this->createForm(StreamType::class, $stream);

    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         // Persist the entity
    //         $entityManager->persist($stream);
    //         $entityManager->flush();

    //         // Redirect to the user's stream page
    //         return $this->redirectToRoute('user_stream', ['id' => $this->getUser()->getId()]);
    //     }

    //     return $this->render('stream/create.html.twig', [
    //         'form' => $form->createView(),
    //     ]);
    // }

    #[Route("/stream/create", name: "stream_create")]
    public function create(Request $request, EntityManagerInterface $entityManager, WebSocketServer $webSocketServer): Response
    {
        // Get the authenticated user
        $user = $this->getUser();

        // Check if the user object and ID are valid
        if (!$user || !method_exists($user, 'getId')) {
            // Handle the case where the user or ID is invalid
            return $this->redirectToRoute('app_login'); // Redirect to the login page or handle as needed
        }

        // Create a new Stream instance with the authenticated user
        $stream = new Stream($user, '');

        // Create the form
        $form = $this->createForm(StreamType::class, $stream);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Persist the entity
                $entityManager->persist($stream);
                $entityManager->flush();

                // Get the WebSocket server URL from parameters
                $websocketServerUrl = $this->getParameter('WEBSOCKET_SERVER_URL');

                // Set the WebSocket URL in the WebSocketServer instance
                $webSocketServer->setWebSocketUrl($websocketServerUrl);

                // Start the WebSocket server
                $webSocketServer->start();

                // Debug statement: Output the WebSocket server URL before initiating the connection
                $this->logger->info("WebSocket server URL: $websocketServerUrl");

                // Initiate the WebSocket connection
                $this->webSocketClient->connect($websocketServerUrl);

                $this->logger->info("WebSocket connection established successfully");

                // Redirect to the user's stream page
                return $this->redirectToRoute('user_stream', ['id' => $user->getId()]);
            } catch (\Exception $e) {
                // Handle connection errors
                $this->logger->error("Failed to establish WebSocket connection: " . $e->getMessage());
            }
        }

        return $this->render('stream/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    
    

//     #[Route("/user/{id}/end-stream", name: "end_stream")]
// public function endStream(User $user, EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator, StreamRepository $streamRepository): Response
// {
//     // Fetch the user's active stream
//     $activeStream = $streamRepository->findActiveStreamByUser($user->getId());

//     if ($activeStream) {
//         // Remove the stream entity
//         $entityManager->remove($activeStream);
//         $entityManager->flush(); // Synchronize changes with the database
//     }

//     // Redirect back to the streams page
//     return $this->redirectToRoute('app_home');
// }

#[Route("/user/{id}/end-stream", name: "end_stream")]
public function endStream(User $user, EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator, StreamRepository $streamRepository, HubInterface $mercureHub): Response
{
    // Fetch the user's active stream
    $activeStream = $streamRepository->findActiveStreamByUser($user->getId());

    if ($activeStream) {
        // Remove the stream entity
        $entityManager->remove($activeStream);
        $entityManager->flush(); // Synchronize changes with the database

        // Disconnect from WebSocket server (assuming you have a WebSocket client service injected)
        $webSocketClient = $this->get('app.websocket_client'); // Adjust the service name as per your configuration
        $webSocketClient->disconnect();

        // Publish a message to Mercure to notify clients (optional)
        $publisher = $this->get(PublisherInterface::class);
        $publisher(new Update(
            $this->generateUrl('stream_updates', [], UrlGeneratorInterface::ABSOLUTE_URL), // Adjust the URL as needed
            json_encode(['message' => 'Stream ended'])
        ));
    }

    // Redirect back to the streams page
    return $this->redirectToRoute('stream_index');
}


    #[Route("/user/{id}/stream", name: "user_stream")]
    public function userStream(User $user, StreamRepository $streamRepository): Response
    {
        // Fetch the user's active or inactive stream
        $stream = $streamRepository->findActiveStreamByUser($user->getId());

        return $this->render('stream/user_stream.html.twig', [
            'user' => $user,
            'stream' => $stream,
        ]);
    }

    #[Route("/stream/{streamId}", name: "view_stream")]
    public function viewStream(int $streamId, StreamRepository $streamRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Fetch the stream by ID
        $stream = $streamRepository->find($streamId);
    
        if (!$stream || !$stream->getIsActive()) {
            // Redirect to the stream index page or show an error page
            return $this->redirectToRoute('stream_index');
        }
    
        // Create a new message stream instance
        $messageStream = new MessageStream();
        $messageStream->setStream($stream);
        $messageStream->setUser($this->getUser()); // Set the user here
    
        // Create the message form
        $messageForm = $this->createForm(MessageStreamType::class, $messageStream);
    
        $messageForm->handleRequest($request);
    
        if ($messageForm->isSubmitted() && $messageForm->isValid()) {
            // Persist the message entity
            $entityManager->persist($messageStream);
            $entityManager->flush();
    
            // Redirect to the same stream view page after submitting the message
            return $this->redirectToRoute('view_stream', ['streamId' => $streamId]);
        }
    
        return $this->render('stream/view_stream.html.twig', [
            'stream' => $stream,
            'messageForm' => $messageForm->createView(),
        ]);
    }

#[Route("/streams", name: "view_streams")]
public function viewStreams(StreamRepository $streamRepository): Response
{
    // Fetch all active streams
    $activeStreams = $streamRepository->findAllActiveStreams();

    return $this->render('stream/view_streams.html.twig', [
        'activeStreams' => $activeStreams,
    ]);
}



}
