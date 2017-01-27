<?php

namespace MoocLangues\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MoocLangues\FormationBundle\Entity\Langue;
use MoocLangues\FormationBundle\Entity\Categorie;
use MoocLangues\FormationBundle\Entity\Exercice;

class CategorieController extends Controller
{
    /**
     * @Route("/categories")
     */
    public function listAction()
    {
        $categories = $this->getDoctrine()->getRepository('MoocLanguesFormationBundle:Categorie')->findAll();

        return $this->render(
            'MoocLanguesFormationBundle:Categorie:list.html.twig',
            ['categories' => $categories]
        );
    }

    /**
     * @Route("/categories/exercice/{id}")
     */
    public function exerciceAction( Categorie $categorie )
    {
        //$exercice = new Exercice();
        //$exercice->setTitle("Exercice1");
        //$exercice->setDescription("exercice sur les animaux");
        //$exercice->setTimestamps( new \DateTime() );

       // $exercice->setCategorie( $categorie );

       // $em = $this->getDoctrine()->getManager();
       // $em->persist( $exercice );
       // $em->flush();

        return $this->redirectToRoute( 'showCategorie', array( 'id' => $categorie->getId() ) );
    }



    /**
     * @Route("/categorie/{id}", requirements={"id": "\d+"}, name="showCategorie")
     */
    public function showAction($id)
    {
        $categorie = $this->getDoctrine()->getRepository('MoocLanguesFormationBundle:Categorie')->find($id);

        return $this->render(
            'MoocLanguesFormationBundle:Categorie:show.html.twig',
            ['categorie' => $categorie]
        );
    }


}
