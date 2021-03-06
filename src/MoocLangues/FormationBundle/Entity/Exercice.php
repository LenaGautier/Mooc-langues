<?php

namespace MoocLangues\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table(name="exercice")
 * @ORM\Entity(repositoryClass="MoocLangues\FormationBundle\Repository\ExerciceRepository")
 */
class Exercice
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamps", type="time")
     */
    private $timestamps;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="exercices")
     */
    private $categorie;


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
     * Set title
     *
     * @param string $title
     *
     * @return Exercice
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set timestamps
     *
     * @param \DateTime $timestamps
     *
     * @return Exercice
     */
    public function setTimestamps($timestamps)
    {
        $this->timestamps = $timestamps;

        return $this;
    }

    /**
     * Get timestamps
     *
     * @return \DateTime
     */
    public function getTimestamps()
    {
        return $this->timestamps;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Exercice
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set categorie
     *
     * @param \MoocLangues\FormationBundle\Entity\Categorie $categorie
     *
     * @return Exercice
     */
    public function setCategorie(\MoocLangues\FormationBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \MoocLangues\FormationBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
