<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Intimisi\UserBundle\Entity\User;

use Intimisi\UserBundle\Form\Type\ProfilType;

/**
 * Profil controller.
 *
 */
class ProfilController extends Controller {

    /**
     * Profil
     *
     */
    public function indexAction() {
        
        $form = $this->createForm(new ProfilType());

        return $this->render('KlientBundle:Profil:index.html.twig', array(
            'errors' => null,
            'form' => $form->createView()));

        
    }

    public function statystykiAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $this->_userId = $this->get('security.context')->getToken()->getUser()->getId();
        $entities = $em->getRepository('KlientBundle:Portfel')->findAllGrouped($this->_userId);

        return $this->render('KlientBundle:Profil:statystyki.html.twig', array(
            'entities' => $entities));

        
    }


}
