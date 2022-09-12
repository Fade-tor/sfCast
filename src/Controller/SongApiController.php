<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongApiController extends AbstractController
{
    #[Route('/api/song/{id<\d+>}', name: 'app_song_getsong', methods: ['GET'])] //como agregamos un parámetro en la ruta podemos agregadro tambien en la funcion //Agregamos al comodin una expresion regular que le indica que solo puede ser un número entero de cualquier dígito. De esta forma evitamos errores si se ingresa por GET un valor que no sea un numero. //agregamos un tercer parametro a traves del metodo methods que nos permite definir el formtado de ingreso de argumentos (GET POST PUT). 
    public function getSong(int $id, LoggerInterface $logger): Response //Le agregamos el int al argumento para que siempre lo convierta en integer.
    {
        $song = [
            'song' => $id,
            'name' => 'Waterfalls',
            'url' => 'http://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];

        $logger->info('Devolviendo respuesta API pra la cansión {song}'.[
            'song' => $id,
        ]);

        return new JsonResponse($song);
        
        //return $this->render('$0.html.twig', []);
    }
}
