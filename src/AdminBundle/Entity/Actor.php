<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actor
 *
 * @ORM\Table(name="actor")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ActorRepository")
 */
class Actor
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
     * @ORM\Column(name="actor_firstname", type="string", length=255)
     */
    private $actorFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="actor_lastname", type="string", length=255)
     */
    private $actorLastname;


    /*
     * @ORM\ManyToMany(targetEntity="Movie", mappedBy="product_actors")
     */
    private $actorMovies;


    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
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
     * Set actorFirstname
     *
     * @param string $actorFirstname
     *
     * @return Actor
     */
    public function setActorFirstname($actorFirstname)
    {
        $this->actorFirstname = $actorFirstname;

        return $this;
    }

    /**
     * Get actorFirstname
     *
     * @return string
     */
    public function getActorFirstname()
    {
        return $this->actorFirstname;
    }

    /**
     * Set actorLastname
     *
     * @param string $actorLastname
     *
     * @return Actor
     */
    public function setActorLastname($actorLastname)
    {
        $this->actorLastname = $actorLastname;

        return $this;
    }

    /**
     * Get actorLastname
     *
     * @return string
     */
    public function getActorLastname()
    {
        return $this->actorLastname;
    }

    /**
     * @return mixed
     */
    public function getActorMovies()
    {
        return $this->actorMovies;
    }

    /**
     * @param mixed $actorMovies
     */
    public function setActorMovies($actorMovies)
    {
        $this->actorMovies = $actorMovies;
    }
}

