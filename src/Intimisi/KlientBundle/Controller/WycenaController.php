<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WycenaController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $this->_userId = $this->get('security.context')->getToken()->getUser()->getId();
        $entities = $em->getRepository('KlientBundle:Portfel')->findAllGrouped($this->_userId);

        return $this->render('KlientBundle:Profil:statystyki.html.twig', array(
            'entities' => $entities));
    }
    
}
