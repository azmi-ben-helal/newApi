<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComteSocial
 *
 * @ORM\Table(name="comte_social")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ComteSocialRepository")
 */
class ComteSocial
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
     * @ORM\Column(name="numerocomptesocial", type="integer")
     */
    private $numerocomptesocial;


    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Etudiant",inversedBy="comptesociales")
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
     * Set numerocomptesocial
     *
     * @param integer $numerocomptesocial
     *
     * @return ComteSocial
     */
    public function setNumerocomptesocial($numerocomptesocial)
    {
        $this->numerocomptesocial = $numerocomptesocial;

        return $this;
    }

    /**
     * Get numerocomptesocial
     *
     * @return int
     */
    public function getNumerocomptesocial()
    {
        return $this->numerocomptesocial;
    }
}

