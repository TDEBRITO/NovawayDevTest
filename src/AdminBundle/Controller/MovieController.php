<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Product;
use AdminBundle\Form\MovieType;
use AdminBundle\Form\ProductType;
use AdminBundle\Service\CheckContent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Validator\ViolationMapper\ViolationMapper;
use Symfony\Component\HttpFoundation\Request;


class MovieController extends Controller
{


    /**
     * @Route("movie/", name="movie_list", methods={"GET"})
     */
    public function listAction(Request $request)
    {
        return $this->render();
    }

    /**
     * @Route("movie/add", name="movie_add", methods={"GET", "POST"})
     */
    public function addAction(Request $request, CheckContent $checkContent)
    {
        $movie = new Product();
        $form = $this->createForm(ProductType::class, $movie);
        $form->add('movieAttributes', MovieType::class, [
            'cascade_validation' => true,
        ]);
//           TODO Gerer l'ajout des acteurs
        $form->add('submit', SubmitType::class, [
            'label' => 'Create',
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $movie->setProductType('Movie');
            $em->persist($movie);
            $em->flush();
            $test = $checkContent->keyWordCheck($movie->getBookAttributes()->getProductAuthor(), 'movie');
            $this->addFlash('success', 'success');
            return $this->redirectToRoute('products_list');
        }

        return $this->render('AdminBundle:Product:add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("movie/{movieId}/edit", name="movie_edit", methods={"GET", "POST"})
     */
    public function editAction(Request $request, $shopId)
    {

    }

    /**
     * @Route("movie/{movieId}/remove", name="movie_delete", methods={"POST"})
     */
    public function removeAction(Request $request, $shopId)
    {

        return $this->redirectToRoute('products_list');
    }

}
