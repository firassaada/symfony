<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TabTwigController extends AbstractController
{
    #[Route('/tab/{longueur?5}', name: 'app_tab_twig')]
    public function index($longueur): Response
    {       for($i=0;$i<$longueur;$i++) {
          $tab[$i] = rand();
      }
        return $this->render('tab_twig/index.html.twig', [
               'length'=>   $longueur,
                  'tab'=> $tab
        ]);
    }
}
