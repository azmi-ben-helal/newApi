<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=30, unique=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=50)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @return mixed
     */
    public function getCour()
    {
        return $this->cour;
    }

    /**
     * @param mixed $cour
     */
    public function setCour($cour)
    {
        $this->cour = $cour;
    }

    /**
     * @return mixed
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * @param mixed $medias
     */
    public function setMedias($medias)
    {
        $this->medias = $medias;
    }

    /**
     * @return mixed
     */
    public function getComptesociales()
    {
        return $this->comptesociales;
    }

    /**
     * @param mixed $comptesociales
     */
    public function setComptesociales($comptesociales)
    {
        $this->comptesociales = $comptesociales;
    }

    /**
     * @return mixed
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * @param mixed $sections
     */
    public function setSections($sections)
    {
        $this->sections = $sections;
    }

    /**
     *
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Cours")
     */
    private $cour;


    /**
     *
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Media")
     */
    private $medias;


    /**
     *
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ComteSocial",mappedBy="Etudiants")
     */
    private $comptesociales;


    /**
     *
     *
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Section",inversedBy="Etudiants")
     */
    private $sections;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Etudiant
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Etudiant
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Etudiant
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}

