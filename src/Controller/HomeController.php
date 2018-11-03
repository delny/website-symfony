<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * 
 */
Class HomeController extends Controller
{

    /**
     * @Route("/", name="app_homepage")
     */
    public function index(Request $request) 
    {
        return $this->render('pages/home.html.twig',[
            'hello' => 'hola i benvinguts',
            'helloLanguage' => 'catalan',
        ]);
    }
}