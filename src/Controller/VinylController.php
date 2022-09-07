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
    public function browse(string $slug = null): Response
    {   
        if($slug == "death-metal"){
        return new Response('Aguante el Millonario!');
        } else {return new Response('Viva la revolución!');}
    }
}