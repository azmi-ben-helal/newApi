<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoursRepository")
 */
class Cours
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
     * @ORM\Column(name="noncours", type="string", length=50)
     */
    private $noncours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire", type="datetime")
     */
    private $horaire;





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
     * Set noncours
     *
     * @param string $noncours
     *
     * @return Cours
     */
    public function setNoncours($noncours)
    {
        $this->noncours = $noncours;

        return $this;
    }

    /**
     * Get noncours
     *
     * @return string
     */
    public function getNoncours()
    {
        return $this->noncours;
    }

    /**
     * Set horaire
     *
     * @param \DateTime $horaire
     *
     * @return Cours
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;

        return $this;
    }

    /**
     * Get horaire
     *
     * @return \DateTime
     */
    public function getHoraire()
    {
        return $this->horaire;
    }
}

