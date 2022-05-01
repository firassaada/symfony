<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IterativefunctionsController extends AbstractController
{
    #[Route('/iterativefunctions', name: 'app_iterativefunctions')]
    public function index(): Response
    {$info=array(
       ['first'=>'Firas','Second'=>'Saada','age'=>20],
       ['first'=>'Wassim','Second'=>'Saada','age'=>16],
       ['first'=>'Nour','Second'=>'Saada','age'=>7],
    ) ;
        return $this->render('iterativefunctions/index.html.twig', [
            'controller_name' => 'IterativefunctionsController',
            'infos' =>$info ,
        ]);
    }
}
