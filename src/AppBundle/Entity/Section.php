<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SectionRepository")
 */
class Section
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
     * @ORM\Column(name="nomsection", type="string", length=50)
     */
    private $nomsection;


    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Etudiant",mappedBy="sections")
     */
    private $Etudiants;




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
     * Set nomsection
     *
     * @param string $nomsection
     *
     * @return Section
     */
    public function setNomsection($nomsection)
    {
        $this->nomsection = $nomsection;

        return $this;
    }

    /**
     * Get nomsection
     *
     * @return string
     */
    public function getNomsection()
    {
        return $this->nomsection;
    }
}

