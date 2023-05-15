<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Bundle\FrameworkBundle\Controller;

class TiendaController extends AbstractController
{

    #[Route('/', name: 'app_homepage')] //xerar novas url empregando <a class="navbar-brand" href="{{ path('app_homepage') }}">
    public function homepage()
    {

        //return new Response("Probando Symfony por primeira vez");


        return $this->render('tienda/homepage.html.twig', [
            'title' => 'Les fleurs du café',
            'legend' => '¡Benvidos á primeira florestería-cafetaría de Vigo!',
            'home_img' => 'images/home_flowers.jpg'

        ]);
    }

    #[Route('/list', name: 'app_list')]
    public function list()
    {

        $products = [
            ['description' =>  'Café só',  'price' => '1€', 'img' => 'images/cafe_so.jpg'],
            ['description' =>  'Café con leite',  'price' => '1.2€', 'img' => 'images/cafe_leite.jpg'],
            ['description' =>  'Rosa (ud.)',  'price' => '2.5€', 'img' => 'images/rosa.jpg'],
            ['description' =>  'Centro de flores',  'price' => '7€', 'img' => 'images/centro_flores.jpg'],
            ['description' =>  'Ramo',  'price' => '10€', 'img' => 'images/ramo.jpg'],
        ];

        return $this->render('tienda/list.html.twig', [
            'title' => 'Les fleurs du café',
            'products' => $products,

        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact()
    {
        return $this->render('tienda/contact.html.twig', [
            'title' => 'Les fleurs du café',
            'legend' => '¡Benvidos á primeira florestería-cafetaría de Vigo!',
            'contact_img' => 'images/contact_flowers.jpg'
        ]);
    }
}
