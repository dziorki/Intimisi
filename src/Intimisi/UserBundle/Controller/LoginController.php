<?php

namespace Intimisi\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Intimisi\UserBundle\Form\Type\RegistrationType;
use Intimisi\UserBundle\Form\Model\Registration;

class LoginController extends Controller {

    public function indexAction() {
        
        $em = $this->getDoctrine()->getEntityManager();

        $wzroslo = 0;
        $zmalalo = 0;
        $bez_zmian = 0;
        $ilosc = 0;
        
        $entities = $em->getRepository('KlientBundle:Notowania')->findAll();
        foreach ($entities as $entity) {
            $ilosc++;
            if($entity->getZmianaKwotowa() > 0)
                $wzroslo++;
            elseif($entity->getZmianaKwotowa() == 0)
                $bez_zmian++;
            else
                $zmalalo++;
        }

        return $this->render('UserBundle:Login:index.html.twig', array(
                    'entities' => $entities,
                    'wzroslo' => $wzroslo,
                    'zmalalo' => $zmalalo,
                    'bez_zmian' => $bez_zmian,
                    'ilosc' => $ilosc
                ));

    }

    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        if ($error) {
            $error = $error->getMessage();
        }

        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        return $this->render('UserBundle:Login:login.html.twig', array(
                    // last username entered by the user
                    'last_username' => $lastUsername,
                    'error' => $error,
                ));
    }


}
