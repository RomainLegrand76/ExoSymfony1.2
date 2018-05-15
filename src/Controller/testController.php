<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 14/05/2018
 * Time: 16:46
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class testController extends Controller
{
    /**
     * @Route ("/test", name ="test")
     */

    public function display(){
        return $this->render("test/test.html.twig");
    }
}