<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MediaRepository")
 */
class Media
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
     * @ORM\Column(name="nommedia", type="string", length=50)
     */
    private $nommedia;



    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Etudiant",mappedBy="medias")
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
     * Set nommedia
     *
     * @param string $nommedia
     *
     * @return Media
     */
    public function setNommedia($nommedia)
    {
        $this->nommedia = $nommedia;

        return $this;
    }

    /**
     * Get nommedia
     *
     * @return string
     */
    public function getNommedia()
    {
        return $this->nommedia;
    }
}

