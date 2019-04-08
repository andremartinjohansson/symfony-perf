<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Dummy;

class Home extends AbstractController
{
    /**
    * @Route("/home")
    */
    public function page()
    {
        $dummy = $this->getDoctrine()
        ->getRepository(Dummy::class)
        ->findAll();

        return $this->render('home.html.twig', 
            array('something' => $dummy)
        );
    }
}