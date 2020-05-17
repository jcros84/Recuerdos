<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InicioController extends AbstractController
{
    /**
     * @Route("/inicio", name="inicio")
     */
    public function index()
    {
        return $this->render('default/default.html.twig');

    }

    /**
     * @Route("/minor", name="minor")
     */
    public function minor()
    {
        return $this->render('default/minor.html.twig');

    }

}
