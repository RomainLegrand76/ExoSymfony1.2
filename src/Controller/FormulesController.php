<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormulesController extends Controller
{
    /**
     * @Route("/formules", name="
     * ")
     */
    public function index()
    {
        return $this->render('formules/index.html.twig', [
            'controller_name' => 'FormulesController',
        ]);
    }
}
