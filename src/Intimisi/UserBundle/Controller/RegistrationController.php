<?php

namespace Intimisi\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Intimisi\UserBundle\Form\Type\RegistrationType;
use Intimisi\UserBundle\Form\Model\Registration;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class RegistrationController extends Controller {

    public function registerAction() {
        $form = $this->createForm(new RegistrationType(), new Registration());

        return $this->render('UserBundle:Login:register.html.twig', array(
                    'errors' => null,
                    'form' => $form->createView()));
    }

    public function createAction() {

        $form = $this->createForm(new RegistrationType(), new Registration());
        $form->bindRequest($this->getRequest());


        if ($form->isValid()) {

            $user = $form->getData()->getUser();
            $user->setEnabled('true');
            $this->container->get('fos_user.user_manager')->updateUser($user);
            $this->authenticateUser($user);

            $this->get('session')->setFlash('notice', 'User has been created successfully! Please login.');

            return $this->redirect($this->generateUrl('login'));
        }

        $validator = $this->get('validator');
        $errors = $validator->validate($form);

        return $this->render('UserBundle:Login:register.html.twig', array(
                    'errors' => $errors,
                    'form' => $form->createView()
                        )
        );
    }
    
    /**
     * Authenticate a user with Symfony Security
     *
     * @param \FOS\UserBundle\Model\UserInterface $user
     */
    protected function authenticateUser(UserInterface $user)
    {
        try {
            $this->container->get('fos_user.user_checker')->checkPostAuth($user);
        } catch (AccountStatusException $e) {
            // Don't authenticate locked, disabled or expired users
            return;
        }

        $providerKey = $this->container->getParameter('fos_user.firewall_name');
        $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());

        $this->container->get('security.context')->setToken($token);
    }

    protected function setFlash($action, $value)
    {
        $this->container->get('session')->setFlash($action, $value);
    }

}