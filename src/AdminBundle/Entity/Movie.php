<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\MovieRepository")
 */
class Movie
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
     * @ORM\Column(name="product_isan", type="string", length=255)
     */
    private $productIsan;

    /**
     * @var string
     *
     * @ORM\Column(name="product_director", type="string", length=255)
     */
    private $productDirector;


    /**
     * @var string
     *
     * @ORM\Column(name="product_actor", type="string", length=255)
     */
    private $productActors;

    /**
     * @var float
     *
     * @ORM\Column(name="product_length", type="float")
     */
    private $productLength;


    /**
     * @var boolean
     *
     * @ORM\Column(name="isblue_ray", type="boolean")
     */
    private $isBlueRay;


    public function __construct() {
        $this->productActors= new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productIsan
     *
     * @param string $productIsan
     *
     * @return Movie
     */
    public function setProductIsan($productIsan)
    {
        $this->productIsan = $productIsan;

        return $this;
    }

    /**
     * Get productIsan
     *
     * @return string
     */
    public function getProductIsan()
    {
        return $this->productIsan;
    }

    /**
     * Set productDirector
     *
     * @param string $productDirector
     *
     * @return Movie
     */
    public function setProductDirector($productDirector)
    {
        $this->productDirector = $productDirector;

        return $this;
    }

    /**
     * Get productDirector
     *
     * @return string
     */
    public function getProductDirector()
    {
        return $this->productDirector;
         }


    /**
     * Set productLength
     *
     * @param integer $productLength
     *
     * @return Movie
     */
    public function setProductLength($productLength)
    {
        $this->productLength = $productLength;

        return $this;
    }

    /**
     * Get productLength
     *
     * @return int
     */
    public function getProductLength()
    {
        return $this->productLength;
    }

    /**
     * @return mixed
     */
    public function getProductActors()
    {
        return $this->productActors;
    }

    /**
     * @param mixed $productActors
     */
    public function setProductActors($productActors)
    {
        $this->productActors = $productActors;
    }

    /**
     * @return boolean
     */
    public function isIsBlueRay()
    {
        return $this->isBlueRay;
    }

    /**
     * @param boolean $isBlueRay
     */
    public function setIsBlueRay($isBlueRay)
    {
        $this->isBlueRay = $isBlueRay;
    }

}

