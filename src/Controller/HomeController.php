<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/prehome', name: 'app_prehome')]
    public function indexpre(): Response
    {
        return $this->render('newbaseprelogin.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('newbase.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
