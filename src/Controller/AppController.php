<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/home_page', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'user' => $this->getUser()
        ]);
    }
}