<?php

namespace App\Controller;

use App\Entity\Etudiant;
use App\Form\EtudiantType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/etudiant')]
class EtudiantController extends AbstractController
{
//affichage du liste des etudiants
    #[Route('/all', name: 'etudiant.liste')]
    public function AfficherEtudiant(ManagerRegistry $doctrine,Etudiant $etudiant=null): Response {
        $manager = $doctrine->getManager();
        $repository = $doctrine->getRepository(Etudiant::class);
        $etudiants = $repository->findAll();
        return $this->render('etudiant/index.html.twig', [
            'etudiants' => $etudiants

        ]);

    }
    //modifier ou ajouter un etudiant
    #[Route('/edit/{id?0}', name: 'etudiant.edit')]
    public function addEtudiant(Etudiant $etudiant = null, ManagerRegistry $doctrine, Request $request): Response
    {
        $new = false;
        //$this->getDoctrine() : Version Sf <= 5
        if (!$etudiant) {
            $new = true;
            $etudiant = new Etudiant();
        }

        $form = $this->createForm(EtudiantType::class, $etudiant);
        // Momn formulaire va aller traiter la requete
        $form->handleRequest($request);
        //Verifier si le formulaire a ete soumis ou nn
        if($form->isSubmitted()) {
            // si oui,
            // on va ajouter l Etudiant dans la base de données
            $manager = $doctrine->getManager();
            $manager->persist($etudiant);
            //execution
            $manager->flush();
            // Afficher un message de succès
            $message = " a été mis à jour avec succès";
            if($new){
                $message = " a été ajouté avec succès";
            }
            $this->addFlash('success',$etudiant->getNom(). $message );
            // Rediriger verts la liste des etudiants
            return $this->redirectToRoute('etudiant.liste');
        } else {
            //Sinon
            //On affiche notre formulaire
            return $this->render('etudiant/add-etudiant.html.twig', [
                'form' => $form->createView()
            ]);
        }

    }
#[Route('/delete/{id}', name: 'etudiant.delete')]
public function deleteEtudiant(Etudiant $etudiant = null, ManagerRegistry $doctrine):RedirectResponse {
    // Récupérer l etudiant
    if ($etudiant) {
        // Si  etudiant existe =>  supprimer , retourner un Message de succés
        $manager = $doctrine->getManager();
        $manager->remove($etudiant);
        // Exécution de la transacition
        $manager->flush();
        $this->addFlash('success', "L' etudiant a été supprimé avec succès");
    } else {
        //Sinon  retourner un Message d'erreur
        $this->addFlash('erreur', "l'etudiant est innexistant!!!");
    }
    return $this->redirectToRoute('etudiant.liste');
}
}
