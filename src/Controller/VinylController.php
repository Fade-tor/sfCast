<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController {

    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Aguante el Millonario!');
        //return $this->render('$0.html.twig', []);
    }

    #[Route('/browse/{slug}')]
    public function browse(): Response
    {
        return new Response('Viva la revolución!');
    }
}