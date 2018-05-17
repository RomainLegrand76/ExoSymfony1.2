<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ConnectController extends Controller
{
    /**
     * @Route("/connect", name="connect")
     */
    public function index(Request $requete)
    {
        $users = new Users();
        $users->setLastname('Legrand');
        $users->setFirstname('Romain');
        $users->setPassword('connect');

        $formulaire = $this->createFormBuilder($users)
            ->add('lastname', TextType::class)
            ->add('firstname', TextType::class)
            ->add('password', TextType::class)
            ->add('envoyer', SubmitType::class, array('label'=>'Connect'))
            ->getForm();
        $requete->isMethod('POST');
        $formulaire->handleRequest($requete);

        if($formulaire->isSubmitted() && $formulaire->isValid()){
            $users = $formulaire->getData();

            return $this->redirectToRoute('connect_formok');
        }

        return $this->render('connect/index.html.twig',
            array('formulaire' => $formulaire->createView()));
    }

    /**
     * @Route("/connect/connecter", name="connect_formok")
     */

    public function formulaireOK(Request $requete){
        return $this->render('connect/connecter.html.twig', ['info' => dump($requete)]);
    }



}
