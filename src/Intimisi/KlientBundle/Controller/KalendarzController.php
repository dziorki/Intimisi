<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class KalendarzController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $this->_userId = $this->get('security.context')->getToken()->getUser()->getId();
        $entities = $em->getRepository('KlientBundle:Portfel')->findBy(array('user_id' => $this->_userId));

        return $this->render('KlientBundle:Kalendarz:index.html.twig', array(
                    'entities' => $entities
                ));
    }
}
