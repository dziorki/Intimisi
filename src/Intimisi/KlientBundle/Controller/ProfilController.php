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


}
