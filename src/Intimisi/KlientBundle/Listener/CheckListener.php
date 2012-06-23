<?php

namespace Intimisi\KlientBundle\Listener;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;
use \Doctrine\Common\Util\Debug;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Session;
use Intimisi\KlientBundle\Entity\Portfel;

class CheckListener {

    public function __construct($serviceContainer) {

        $this->request = $serviceContainer->get('request');
        $this->em = $serviceContainer->get('doctrine')->getEntityManager();
        $this->security = $serviceContainer->get('security.context');
    }

    public function firstController(Event $event) {

//        $securityContext = $this->security->isGranted('IS_AUTHENTICATED_FULLY');
//
//        if (true == $securityContext) {
//            $userId = $this->security->getToken()->getUser()->getId();
//
//            $count = $this->em->getRepository('KlientBundle:Portfel')->findAllGroupedCunt($userId);
//
//        }
    }

}

