<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EasyWeedingController extends Controller
{
    /**
     * @Route("/easy/weeding", name="easy_weeding")
     */
    public function index()
    {
        return $this->render('easy_weeding/index.html.twig', [
            'controller_name' => 'EasyWeedingController',
        ]);
    }
}
