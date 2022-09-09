<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function Symfony\Component\String\u;


class VinylController extends AbstractController {

    #[Route('/')]
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

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response{   
        if ($slug) {

        $title = 'Genero: '.u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true): null;
        }
       return $this->render('browse.html.twig',);
}
}
?>