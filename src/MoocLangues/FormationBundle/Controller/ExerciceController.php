<?php

namespace MoocLangues\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ExerciceController extends Controller
{
    /**
     * @Route("/exercices")
     */
    public function listAction()
    {
        return $this->render('MoocLanguesFormationBundle:Exercice:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/exercice")
     */
    public function showAction()
    {
        return $this->render('MoocLanguesFormationBundle:Exercice:show.html.twig', array(
            // ...
        ));
    }

}
