<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoginController extends AbstractController
{
    #[Route('/api/login_check', name: 'app_login_check', methods : ["POST"])]
    public function Login()
    {
        
    }
    #[Route('/api/test', name: 'app_test')]
    public function test(): Response
    {
        return new Response("Vous etes connéctés");
    }
}
