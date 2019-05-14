<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Product;

class Home extends AbstractController
{
    /**
    * @Route("/home")
    */
    public function page()
    {
 	/*$j = [];
	for ($i = 0; $i <= 1000000000; $i++) {
		$j[$i] = $i;
	}*/
	set_time_limit(0);
	ini_set('memory_limit', '4096M');
        $dummy = $this->getDoctrine()
        ->getRepository(Product::class)
        ->findAll();

	$this->getDoctrine()
	->getConnection()
	->close();

	gc_collect_cycles();

	$response = new Response();

	$response->setContent(json_encode(array(
		'test' => $dummy
	)));

	$response->headers->set('Content-Type', 'application/json');

       /* return $this->render('home.html.twig', 
            array('something' => $dummy)
        );*/
	return $response;
    }
}
