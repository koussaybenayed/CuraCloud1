<?php

namespace App\Controller;


use App\Entity\Prescription;
use App\Entity\Meds;
use App\Form\PrescriptionType;
use App\Form\MedsType;
use App\Repository\PrescriptionRepository;
use App\Repository\MedsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;



class PaymentController extends AbstractController
{

    #[Route('/user/prescriptions/{id}/pay', name: 'user_prescription_pay', methods: ['GET'])]
public function pay(Prescription $prescription, MedsRepository $medsRepository): Response
    {
        // Fetch medication details
        $medicationName = $prescription->getMedication();
        $medicationDetails = $medsRepository->findMedsByName($medicationName);
        
        // Get medication details from the prescription
        $medicationPrice = $medicationDetails->getPrice(); // Assuming you have a method to get the price
        
        // Process payment using Stripe or any other payment gateway
        // Set up Stripe API key
        Stripe::setApiKey( 'sk_test_51OrpfpI4zlfP8CIES2418Uy7Cae2WTx7GtJuayOKW5PvdvN3noxVgq9MhLs8PZmgjSClfOfnB8xVuO6Ua8sB06BV00tpM9Zq70');

        // Create a new Stripe session for payment
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $medicationName,
                    ],
                    'unit_amount' => $medicationPrice*100 , // Stripe requires amount in cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cancel_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

        // Redirect the user to the Stripe checkout page
        return $this->redirect($session->url, 303);
    
}

    #[Route('/success-url', name: 'success_url')]
    public function successUrl(): Response
    {
        return $this->render('prescription/success.html.twig');
    }

    #[Route('/cancel-url', name: 'cancel_url')]
    public function cancelUrl(): Response
    {
        return $this->render('prescription/cancel.html.twig');
    }
}