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
        $productos = [
            ['descripcion' =>  'Anillo - Cruz oro',  'precio' => 100, 'foto' => 'images/anillo.jpg'],
            ['descripcion' =>  'Pulsera - Rayo plata',  'precio' => 10, 'foto' => 'images/pulsera.jpg'],
            ['descripcion' =>  'Colgante - Oso plata',  'precio' => 300, 'foto' => 'images/colgante.jpg'],
        ];

        return $this->render('tienda/homepage.html.twig', [
            'titulo' => 'Patatillas',
            'productos' => $productos,

        ]);
    }

    #[Route('/list/{slug}', name: 'app_list')]
    public function list(string $slug = null)
    {
        if ($slug) {
            return new Response('Futura lista de ' . $slug);
        } else {
            return new Response('Futura lista');
        }
    }
}
