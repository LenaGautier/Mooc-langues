<?php

namespace MoocLangues\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="MoocLangues\FormationBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

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
     * @ORM\ManyToOne(targetEntity="Langue", inversedBy="categories")
     */
    private $langue;

    /**
     * @ORM\OneToMany(targetEntity="Exercice", mappedBy="categorie")
     */
    private $exercices;


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
     * Set name
     *
     * @param string $name
     *
     * @return Categorie
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set timestamps
     *
     * @param \DateTime $timestamps
     *
     * @return Categorie
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
     * @return Categorie
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
     * Set langue
     *
     * @param \MoocLangues\FormationBundle\Entity\Langue $langue
     *
     * @return Categorie
     */
    public function setLangue(\MoocLangues\FormationBundle\Entity\Langue $langue = null)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return \MoocLangues\FormationBundle\Entity\Langue
     */
    public function getLangue()
    {
        return $this->langue;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->exercices = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add exercice
     *
     * @param \MoocLangues\FormationBundle\Entity\Exercice $exercice
     *
     * @return Categorie
     */
    public function addExercice(\MoocLangues\FormationBundle\Entity\Exercice $exercice)
    {
        $this->exercices[] = $exercice;

        return $this;
    }

    /**
     * Remove exercice
     *
     * @param \MoocLangues\FormationBundle\Entity\Exercice $exercice
     */
    public function removeExercice(\MoocLangues\FormationBundle\Entity\Exercice $exercice)
    {
        $this->exercices->removeElement($exercice);
    }

    /**
     * Get exercices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExercices()
    {
        return $this->exercices;
    }
}
