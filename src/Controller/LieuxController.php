<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LieuxController extends Controller
{
    /**
     * @Route("/lieux", name="lieux")
     */
    public function index()
    {
        return $this->render('lieux/index.html.twig', [
            'controller_name' => 'LieuxController',
        ]);
    }
}
