<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\MovieRepository")
 */
class Movie extends ProductInterface
{

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
     * @ORM\ManyToMany(targetEntity="Actor", inversedBy="actor_movies")
     * @ORM\JoinTable(name="product_actors")
     */
    private $productActors;

    /**
     * @var int
     *
     * @ORM\Column(name="product_length", type="integer")
     */
    private $productLength;


    public function __construct() {
        $this->productActors= new \Doctrine\Common\Collections\ArrayCollection();
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
}

