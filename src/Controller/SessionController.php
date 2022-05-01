<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{

    #[Route('/session', name: 'app_session')]
    public function index(Request $request): Response
    {
        $session=$request->getSession() ;
        if($session->has('visites')) {
            $nbrvisite=$session->get('visites')+1 ;
        }
        else {
            $nbrvisite=1  ;
        }
        $session->set('visites',$nbrvisite) ;
        return $this->render('session/index.html.twig', [
        ]);
    }
}
