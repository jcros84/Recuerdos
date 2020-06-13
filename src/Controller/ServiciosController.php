<?php

namespace App\Controller;

use SoapClient;
use SoapFault;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ServiciosController extends AbstractController
{
    /**
     * @Route("/servicios", name="servicios")
     */
    public function index()
    {
        $titulo = 'Terminator 2';
        str_replace(" ", "+", $titulo);
        $url = "http://www.omdbapi.com/?t=" . urldecode($titulo) . "&apikey=ad753c30";
        print_r($url);
        /*$url = "https://api.weatherbit.io/v2.0/current?city=Raleigh,NC&key=%2242bb430c722f4792ac5a8a676ec96d39%22";*/
        $data = json_decode(file_get_contents($url), true);

        /**        echo $data["Title"]."\n";
         * echo $data["Rated"]."\n";
         * echo $data["Actors"]."\n";
         * echo $data["Awards"]."\n";
         * echo'<img src="'. $data["Poster"]  .'" alt="Girl in a jacket" width="500" height="600">';*/
        return $this->render('servicios/index.html.twig', ['pelicula' => $data, 'dir' => $url]);

    }
}
