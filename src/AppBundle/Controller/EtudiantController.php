<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Etudiant;
use AppBundle\Form\EtudiantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EtudiantController extends Controller
{
    /**
     * @return mixed
     * @route("/add" ,name="addEtudiant")
     */
    public function addAction()
    {

        $etudiant= new Etudiant();

        $form=$this->createForm(EtudiantType::class,$etudiant);
        return $this->render('@App/Etudiant/add.html.twig', array('form'=>$form->createView()));
    }

}
