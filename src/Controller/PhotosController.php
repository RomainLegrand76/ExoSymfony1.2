<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PhotosController extends Controller
{
    /**
     * @Route("/photos", name="photos")
     */
    public function index()
    {
        return $this->render('photos/index.html.twig', [
            'controller_name' => 'PhotosController',
        ]);
    }
}
