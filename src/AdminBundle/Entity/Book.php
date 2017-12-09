<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\BookRepository")
 */
class Book
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="product_isbn", type="string", length=255)
     */
    private $productIsbn;

    /**
     * @var string
     *
     * @ORM\Column(name="product_author", type="string", length=255)
     */
    private $productAuthor;


    /**
     * @var int
     *
     * @ORM\Column(name="product_page_number", type="integer")
     */
    private $productPageNumber;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set productIsbn
     *
     * @param integer $productIsbn
     *
     * @return Book
     */
    public function setProductIsbn($productIsbn)
    {
        $this->productIsbn = $productIsbn;

        return $this;
    }

    /**
     * Get productIsbn
     *
     * @return int
     */
    public function getProductIsbn()
    {
        return $this->productIsbn;
    }

    /**
     * Set productAuthor
     *
     * @param string $productAuthor
     *
     * @return Book
     */
    public function setProductAuthor($productAuthor)
    {
        $this->productAuthor = $productAuthor;

        return $this;
    }

    /**
     * Get productAuthor
     *
     * @return string
     */
    public function getProductAuthor()
    {
        return $this->productAuthor;
    }

    /**
     * Set productPageNumber
     *
     * @param integer $productPageNumber
     *
     * @return Book
     */
    public function setProductPageNumber($productPageNumber)
    {
        $this->productPageNumber = $productPageNumber;

        return $this;
    }

    /**
     * Get productPageNumber
     *
     * @return int
     */
    public function getProductPageNumber()
    {
        return $this->productPageNumber;
    }
}

