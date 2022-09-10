<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function Symfony\Component\String\u;


class VinylController extends AbstractController {

    #[Route('/', name:'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'gasnta paradyse', 'artist' => 'Coolio'],
            ['song' => 'Viva la Revolución', 'artist' => 'Ramones'],
            ['song' => 'Rosa Rosa', 'artist' => 'Sandro'],
            ['song' => 'Narigón del Siglo', 'artist' => 'Divididos'],
            ['song' => 'Let it be', 'artist' => 'The Beatles'],
            ['song' => 'One', 'artist' => 'Metallica'],
        ];


        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
        //return $this->render('$0.html.twig', []);
    }

    #[Route('/browse/{slug}', name:'app_browse')]
    public function browse(string $slug = null): Response{ 

        $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true): null; 
        //esta es otra forma de intaxis del if: ?=if -- :=else;

       return $this->render('vinyl/browse.html.twig', ['genre'=>$genre,]);
}
}
?>