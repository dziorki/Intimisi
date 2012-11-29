<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller {

    public function indexAction() {
        
        $userId = $this->get('security.context')->getToken()->getUser()->getId();

        $count = $this->getDoctrine()->getRepository('KlientBundle:Portfel')->findAllGroupedCunt($userId);
        $aktualnosci = $this->getDoctrine()->getRepository('KlientBundle:Aktualnosci')->findAll($userId);
        $ulubieni = $this->getDoctrine()->getRepository('KlientBundle:Ulubieni')->findAll($userId);

        return $this->render('KlientBundle::header.html.twig', array(
                    'inwestycje' => $count,
                    'aktualnosci' => count($aktualnosci),
                    'ulubieni' => count($ulubieni)
                ));
    }
    
    public function leftMenuAction() {

        $userId = $this->get('security.context')->getToken()->getUser()->getId();

        $count = $this->getDoctrine()->getRepository('KlientBundle:Portfel')->countOperation($userId);

        return $this->render('KlientBundle::leftNav.html.twig', array(
                    'operacje' => $count
                ));
    }

}
