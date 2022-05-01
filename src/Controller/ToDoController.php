<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/todo',name : 'nn')]
class ToDoController extends AbstractController
{
    #[Route('', name: 'app_to_do')]
    public function indexAction(Request $request): Response
    {$session=$request->getSession() ;
        if((!$session->has('todo')) ){
        $todos = array(
            'achat'=>'acheter clé usb',
            'cours'=>'Finaliser mon cours',
            'correction'=>'corriger mes examens',);
            $session->set('todo',$todos) ;
            }
        return $this->render('to_do/index.html.twig', [
        ]);
    }
    #[Route('/add/{name?valeur}/{task?ParDefaut}', name: 'whatever')]
   public function AddToDo(Request $request,$name,$task) : Response {
        $session=$request->getSession() ;
        $todos=$session->get('todo') ;
        if($session->has('todo')){
            if(isset($todos[$name])) {
                $this->addFlash("danger","$name existe deja");
            }
            else {
                $todos[$name]=$task ;
                $session->set('todo',$todos) ;
                $this->addFlash("success","jawek behi");
            }
        }
        else {
            $this->addFlash("error","tableau non existant");
        }
        return $this->redirectToRoute('nnapp_to_do') ;
   }
}
