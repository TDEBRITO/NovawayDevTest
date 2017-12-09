<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $products = $em->getRepository('AdminBundle:Product')->findLastFive();

        return $this->render('AppBundle:Dashboard:index.html.twig', [
            'products' => $products
        ] );
    }
}
