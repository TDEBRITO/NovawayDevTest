<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductInterface
 *
 * @ORM\Table(name="product_interface")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ProductInterfaceRepository")
 */
class ProductInterface
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
     * @var int
     *
     * @ORM\Column(name="product_type", type="integer")
     */
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\ProductType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productType", referencedColumnName="id")
     * })
     */
    private $productType;

    /**
     * @var string
     *
     * @ORM\Column(name="product_title", type="string", length=255)
     */
    private $productTitle;

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
}

