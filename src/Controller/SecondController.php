<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function first(): Response
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'SecondController',
        ]);
    }
    #[Route('/second/{nom}', name: 'app_second')]
    public function param($nom): Response
    {
        return $this->render('second/index.html.twig', [
            'controller_name' => 'SecondController',
            'name' => $nom ,
            'path' =>'  '
        ]);
    }
}
