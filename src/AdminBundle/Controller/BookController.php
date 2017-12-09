<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Product;
use AdminBundle\Form\ProductType;
use AdminBundle\Service\CheckContent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Validator\ViolationMapper\ViolationMapper;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Form\BookType;


class BookController extends Controller
{


    /**
     * @Route("book/", name="book_list", methods={"GET"})
     */
    public function listAction(Request $request)
    {
        return $this->render();
    }

    /**
     * @Route("book/add", name="book_add", methods={"GET", "POST"})
     */
    public function addAction(Request $request, CheckContent $checkContent)
    {
        $book = new Product();
        $form = $this->createForm(ProductType::class, $book);
        $form->add('bookAttributes', BookType::class,[
            'cascade_validation' => true,
        ]);
        $form->add('submit', SubmitType::class, [
            'label' => 'Create',
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em = $this->getDoctrine()->getManager();
                $book->setProductType('Book');
                $em->persist($book);
                $em->flush();
                $test = $checkContent->keyWordCheck($book->getBookAttributes()->getProductAuthor(), 'book');
                $this->addFlash('success', 'success');
                return $this->redirectToRoute('products_list');
            } catch (\Exception $ex) {
                $this->addFlash('error', 'error');
            }
        }

        return $this->render('AdminBundle:Product:add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("book/{movieId}/edit", name="book_edit", methods={"GET", "POST"})
     */
    public function editAction(Request $request, $shopId)
    {

    }

    /**
     * @Route("book/{movieId}/remove", name="book_delete", methods={"POST"})
     */
    public function removeAction(Request $request, $shopId)
    {
        return $this->redirectToRoute('products_list');
    }

}
