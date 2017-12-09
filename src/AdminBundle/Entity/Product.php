<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductInterface
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="product_type", type="string", length=255)
     */
    private $productType;

    /**
     * @var string
     *
     * @ORM\Column(name="product_title", type="string", length=255)
     */
    private $productTitle;

    /**
     * @var float
     *
     * @ORM\Column(name="product_price", type="float", length=255)
     */
    private $productPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="product_release_date", type="date")
     */
    private $productReleaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="product_summary", type="text")
     */
    private $productSummary;

    /**
     * One Product has One Shipment.
     * @ORM\OneToOne(targetEntity="AdminBundle\Entity\Book",cascade={"persist"})
     * @ORM\JoinColumn(name="book_attributes", referencedColumnName="id")
     */
    private $bookAttributes;

    /**
     * One Product has One Shipment.
     * @ORM\OneToOne(targetEntity="AdminBundle\Entity\Movie",cascade={"persist"})
     * @ORM\JoinColumn(name="movie_attributes", referencedColumnName="id")
     */
    private $movieAttributes;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productType
     *
     * @param integer $productType
     *
     * @return ProductInterface
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get productType
     *
     * @return int
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Set productTitle
     *
     * @param string $productTitle
     *
     * @return ProductInterface
     */
    public function setProductTitle($productTitle)
    {
        $this->productTitle = $productTitle;

        return $this;
    }

    /**
     * Get productTitle
     *
     * @return string
     */
    public function getProductTitle()
    {
        return $this->productTitle;
    }

    /**
     * Set productReleaseDate
     *
     * @param \DateTime $productReleaseDate
     *
     * @return ProductInterface
     */
    public function setProductReleaseDate($productReleaseDate)
    {
        $this->productReleaseDate = $productReleaseDate;

        return $this;
    }

    /**
     * Get productReleaseDate
     *
     * @return \DateTime
     */
    public function getProductReleaseDate()
    {
        return $this->productReleaseDate;
    }

    /**
     * Set productSummary
     *
     * @param array $productSummary
     *
     * @return ProductInterface
     */
    public function setProductSummary($productSummary)
    {
        $this->productSummary = $productSummary;

        return $this;
    }

    /**
     * Get productSummary
     *
     * @return array
     */
    public function getProductSummary()
    {
        return $this->productSummary;
    }

    /**
     * @return mixed
     */
    public function getBookAttributes()
    {
        return $this->bookAttributes;
    }

    /**
     * @param mixed $bookAttributes
     */
    public function setBookAttributes($bookAttributes)
    {
        $this->bookAttributes = $bookAttributes;
    }

    /**
     * @return mixed
     */
    public function getMovieAttributes()
    {
        return $this->movieAttributes;
    }

    /**
     * @param mixed $movieAttributes
     */
    public function setMovieAttributes($movieAttributes)
    {
        $this->movieAttributes = $movieAttributes;
    }

    /**
     * @return float
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param float $productPrice
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

}

