<?php

namespace Pg\GsbFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pg\GsbFraisBundle\Entity\Tablette;

class ListerTablettesController extends Controller
{
	public function listerAction()
	{
		$em = $this->getDoctrine()->getManager();

		$tablette = new Tablette();
		$tablette->setVisiteur('Jean');
		$tablette->setMemoireInterne('4');
		$tablette->setMemoireExterne('8');
		$tablette->setOs('iOs');



		/*$em->persist($tablette);*/
		$em->flush();

		$tablettes = $em->getRepository('PgGsbFraisBundle:Tablette')->findAll();






		
		return $this->render('PgGsbFraisBundle:Tablettes:lister.html.twig', array('tablettes' => $tablettes));
	}
		
}