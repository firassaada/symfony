<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstoneController extends AbstractController
{
    #[Route('/firstone', name: 'firstone')]
    public function index(): Response
    {
        return $this->render('firstone/index.html.twig', [
            'controller_name' => 'FirstoneController',
        ]);
    }
    #[Route('/whatever', name: 'whatever')]
    public function whatever(): Response
    {$i=rand(0,5) ;
        echo $i ;
        if($i==2){
            return $this->forward('App\Controller\FirstoneController::index' );
        }
        return $this->render('firstone/ss.html.twig', [
            'controller_name' => 'FirstoneController',
            'profession' => 'hawess',
        ]);
    }
}
