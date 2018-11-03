<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hello;

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
        $hellos = $this->getDoctrine()->getRepository(Hello::class)->findAll();
        $hello = $hellos[array_rand($hellos)];
        return $this->render('pages/home.html.twig',[
            'hello' => $hello,
        ]);
    }
}
