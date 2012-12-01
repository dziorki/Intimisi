<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PomocController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('KlientBundle:Pomoc')->findAll();
        
        return $this->render('KlientBundle:Pomoc:index.html.twig' , array(
            'entities' => $entity
        ));
    }
}
