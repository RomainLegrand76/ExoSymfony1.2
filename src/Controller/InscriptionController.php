<?php

namespace App\Controller;

use App\Entity\Inscription;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class InscriptionController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(Request $requete)
    {
        $inscription = new Inscription();

        $formulaire = $this->createFormBuilder($inscription)
            ->add('usePrenom', TextType::class)
            ->add('useNom', TextType::class)
            ->add('useMail', EmailType::class)
            ->add('usePassword', PasswordType::class)
            ->add('envoyer', SubmitType::class, array('label'=>'Inscription'))
            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid()){

            $inscription = $formulaire->getData();

            return $this->redirectToRoute('inscription_formok');
        }

        return $this->render('inscription/index.html.twig',
            array('formulaire' => $formulaire->createView()));
    }

    /**
     * @Route("/inscription/formulaire", name="inscription_formulaire")
     */


    /**
     * @Route("/inscription/formok", name="inscription_formok")
     */

    public function formulaireOK(){
        return $this->render('inscription/formok.html.twig');
    }

}
