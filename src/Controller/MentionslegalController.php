<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MentionslegalController extends Controller
{
    /**
     * @Route("/mentionslegal", name="mentionslegal")
     */
    public function index()
    {
        return $this->render('mentionslegal/index.html.twig', [
            'controller_name' => 'MentionslegalController',
        ]);
    }
}
