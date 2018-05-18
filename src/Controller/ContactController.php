<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function formulaire(Request $requete)
    {
        $inscription = new Contact();

        $formulaire = $this->createFormBuilder($inscription)
            ->add('Nom',TextType::class)
            ->add('Mail', TextType::class)
            ->add('Message', TextareaType::class)
            ->add('Envoyer',SubmitType::class,array('label' => 'Contact'))
            ->getForm();

        $formulaire->handleRequest($requete);

        if($formulaire->isSubmitted() && $formulaire->isValid())
        {
            $inscription = $formulaire->getData();

            return $this->redirectToRoute(contact_formok);
        }

        return $this->render('/contact/index.html.twig',
            array('formulaire' => $formulaire->createView()));
    }

    /**
     * @Route("/contact/formok",name="inscription_formok")
     */

    public function formulaireOK(){
        return $this->render('inscription/formok.html.twig');
    }

}
