<?php

namespace MoocLangues\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MoocLangues\FormationBundle\Entity\Langue;
use MoocLangues\FormationBundle\Entity\Categorie;
use MoocLangues\FormationBundle\Entity\Exercice;


class LangueController extends Controller
{

    /**
     * @Route("/langues")
     */
    public function listAction()
    {
        $langues = $this->getDoctrine()->getRepository('MoocLanguesFormationBundle:Langue')->findAll();

        return $this->render(
            'MoocLanguesFormationBundle:Langues:list.html.twig',
            ['langues' => $langues]
        );
    }

    /**
     * @Route("/langues/categorie/{id}")
     */
    public function categorieAction( Langue $langue )
    {
       return $this->redirectToRoute( 'showLangue', array( 'id' => $langue->getId() ) );
    }



    /**
     * @Route("/langue/{id}", requirements={"id": "\d+"}, name="showLangue")
     */
    public function showAction($id)
    {
        $langue = $this->getDoctrine()->getRepository('MoocLanguesFormationBundle:Langue')->find($id);

        return $this->render(
            'MoocLanguesFormationBundle:Langues:show.html.twig',
            ['langue' => $langue]
        );
    }





}
