<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Professionnels;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProfessionnelsController extends Controller
{
    /**
     * @Route("/professionnels", name="professionnels")
     */
    public function index()
    {
        return $this->render('professionnels/index.html.twig', [
            'controller_name' => 'ProfessionnelsController',
        ]);
    }

    /**
     * @Route("/professionnels/formulaire", name="professionnels_formulaire")
     */
    public function formulaire(Request $requete){
        $professionnel = new Professionnels();
        $professionnel->setName('Toto Company');
        $professionnel->setCategorie('Comique');
        $professionnel->setSiret(0000000000);

        $formulaire = $this->createFormBuilder($professionnel)
            ->add('name', TextType::class)
            ->add('categorie', TextType::class)
            ->add('siret', NumberType::class)
            ->add('envoyer', SubmitType::class, array('label'=>'Inscrire professionnel'))
            ->getForm();

        $formulaire->handleRequest($requete);

        if($formulaire->isSubmitted() && $formulaire->isValid()){
            $professionnel = $formulaire->getData();

            return $this->redirectToRoute('professionnels_formok');
        }

        return $this->render('professionnels/index.html.twig',
            array('formulaire' => $formulaire->createView()));
    }

    /**
     * @Route("/professionnels/formok", name="professionnels_formok")
     */

    public function formulaireOK(){
        return $this->render('professionnels/formok.html.twig');
    }

}
