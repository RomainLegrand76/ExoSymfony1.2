<?php

namespace App\Controller;

use App\Entity\Lieux;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LieuxController extends Controller
{
    /**
     * @Route("/lieux", name="lieux")
     */

    public function index(Request $requete)
    {
        $choix = new Lieux();

        $formulaire = $this->createFormBuilder($choix)
            ->add('Ville', TextType::class)
            ->add('Cp', TextType::class)
            ->add('Adresse', TextType::class)
            ->add('Nom_de_la_salle', TextType::class)
            ->add('envoyer', SubmitType::class, array('label'=>'Choisir'))
            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid()){

            $choix = $formulaire->getData();

            return $this->redirectToRoute('lieux_formok');
        }

        return $this->render('lieux/index.html.twig',
            array('formulaire' => $formulaire->createView()));
    }

        /**
         * @Route("/lieux/formulaire", name="lieux_formulaire")
         */


        /**
         * @Route("/lieux/formok", name="lieux_formok")
         */

        public function formulaireOK(){
        return $this->render('lieux/formok.html.twig');
    }

}
