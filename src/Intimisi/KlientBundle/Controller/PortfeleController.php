<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Doctrine\Common\Util\Debug;

class PortfeleController extends Controller
{
    
    public function indexAction()
    {
        
        $entity = $this->getDoctrine()->getRepository('KlientBundle:Portfel')->findAllPortfel();

        
        return $this->render('KlientBundle:Portfele:index.html.twig', array(
            'entities' => $entity,
            'errors' => null
        ));
    }
}
