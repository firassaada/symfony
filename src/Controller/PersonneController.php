<?php

namespace App\Controller;

use App\Entity\Personne;
use Doctrine\Persistence\ManagerRegistry;
use Faker\Provider\ar_JO\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/personne',name:'person')]
class PersonneController extends AbstractController
{
     #[Route('/SELECT', name: 'SELECT_personne')]
     public function select(ManagerRegistry $doctrine) : Response {
        $repository=$doctrine->getRepository(Personne::class) ;
        $personnes=$repository->findAll() ;
        return $this->render('personne/index.html.twig',['persons'=>$personnes,]) ;
    }
    #[Route('/', name: 'app_personne')]
    public function Addpersonne(ManagerRegistry $doctrine): Response
    {
        $EntityManager=$doctrine->getManager() ;
        $personne=new Personne() ;
        $personne->setFirstName('Firas') ;
        $personne->setName('Saada' ) ;
        $personne->setAge(20) ;
        $personne2=new Personne() ;
        $personne2->setFirstName('Nour') ;
        $personne2->setName('Saada' ) ;
        $personne2->setAge(7) ;

        //add to :
        $EntityManager->persist($personne);
        $EntityManager->persist($personne2);
//execute :
        $EntityManager->flush();
        return $this->render('personne/detail.html.twig', [
            'controller_name' => 'PersonneController',
            'person'=> $personne,
            'person2'=> $personne2,

        ]);
    }
}
