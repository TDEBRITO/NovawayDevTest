<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Validator\ViolationMapper\ViolationMapper;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{


    /**
     * @Route("/", name="products_list", methods={"GET"})
     */
    public function listAction(Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $products = $em->getRepository('AdminBundle:Product')->findAll();

        return $this->render('AdminBundle:Product:show.html.twig', [
            'products' => $products
        ] );
    }

}
