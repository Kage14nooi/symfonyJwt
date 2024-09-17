<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestjwtController extends AbstractController
{
    #[Route('/testjwt', name: 'app_testjwt')]
    public function index(): Response
    {
        return $this->render('testjwt/index.html.twig', [
            'controller_name' => 'TestjwtController',
        ]);
    }
}
