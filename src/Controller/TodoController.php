<?php

namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends AbstractController
{
    /**
     * @Route("/todo", name="todo")
     */
    public function index(SessionInterface $session): Response
    {  //Vérifier si les todos existent dans la session
        if (!$session->has('todos')) {
            $todos=  [
                'Achat' => 'Acheter clé USB',
                'Cours' => 'Finaliser mon cours  ',
                'Correction' =>'Corriger mes examens',
                'Travaux Dirigés'=>'Finir le TD téleinfo',
            ];
            $session->set('todos', $todos);
            $this->addFlash('info' ,'Bienvenue,Remplir to do list');
        }
        return $this->render('todo/index.html.twig', [

        ]);
    }

    /**
     * @Route ("/todo/add/{name}/{content}",name="addTodo")
     */
    public function addTodo($name, $content, SessionInterface $session)
    {
        if (!$session->has('todos')) {
            $this->addFlash('erreur', "la liste n'est pas initialisée!");
        } else {
            $todos = $session->get('todos');
            if (isset($todos[$name])) {
                $this->addFlash('erreur', "To Do existe déja !");
            } else {
                $todos[$name] = $content;
                $session->set('todos', $todos);
                $this->addFlash('success', "To Do $name est ajouté avec succes");

            }


        }
        return $this->redirectToRoute('todo');
    }

    /**
     * @Route ("/todo/delete/{name}",name="DeleteToDo")
     */
    public function DeleteToDo($name, SessionInterface $session)
    {
        if (!$session->has('todos')) {
            $this->addFlash('error', "la liste n'est pas initialisée!");
        } else {
            $todos = $session->get('todos');
            if (isset($todos[$name])) {

                unset($todos[$name]);
                $session->set('todos', $todos);
                $this->addFlash('success', "To Do $name est supprimé avec succés !");
            } else {

                $this->addFlash('erreur', "Le To Do $name que vous voulez supprimer n'existe pas !");

            }


        }
        return $this->redirectToRoute('todo');
    }

    /**
     * @Route ("/todo/updatetodo/{newName}/{newcontent}",name="UpdateToDo",defaults={"content" : "null"})
     */
    public function updateTodo(SessionInterface $session,$newName,$newcontent){
        if ($session ->has('todos')) {
            $todos = $session ->get('todos');
            if (!isset($todos[$newName])){
                $this -> addFlash('erreur',"Le todo $newName n'existe pas !" );}
            else{
                $todos[$newName]= $newcontent;
                $session ->set('todos',$todos);
                $this -> addFlash('success',"Le todo $newName a été mise a jour  avec succès !" );

            }
        }
        else{
            //Déclancher une erreur et redirection vers le controlleur initial
            $this -> addFlash('erreur',"La liste  n'est pas encore initialisée" );
        }
        return $this ->redirectToRoute('todo');
    }

    /**
     * @Route ("/todo/resettodo",name="ResetToDo")
     */
    public function ResetToDo( SessionInterface $session)
    {
        if (!$session->has('todos')) {
            $this->addFlash('erreur', "la liste n'est pas initialisée!");
        } else {
            session_unset();
            $todos=  [
                'Achat' => 'Acheter clé USB',
                'Cours' => 'Finaliser mon cours  ',
                'Correction' => 'Corriger mes examens',
                'Travaux Dirigés'=>'Finir le TD téleinfo',
            ];
            $session->set('todos', $todos);
            $this->addFlash('success', "To Do List has been reset successfully");


        }
        return $this->redirectToRoute('todo');
    }

}