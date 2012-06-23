<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Intimisi\KlientBundle\Entity\Portfel;
use Intimisi\KlientBundle\Form\PortfelType;
use Intimisi\KlientBundle\Form\PortfelSprzedajType;
use \Doctrine\Common\Util\Debug;

/**
 * Portfel controller.
 *
 */
class PortfelController extends Controller {

    private $_userId;

    /**
     * Lists all Portfel entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $this->_userId = $this->get('security.context')->getToken()->getUser()->getId();
        $entities = $em->getRepository('KlientBundle:Portfel')->findAllGrouped($this->_userId);
        
        $hBar = $em->getRepository('KlientBundle:Portfel')->hBarPortfel($this->_userId);

        return $this->render('KlientBundle:Portfel:index.html.twig', array(
                    'entities' => $entities,
                    'hBar' => $hBar
                ));
    }

    /**
     * Lists all Portfel entities.
     *
     */
    public function historyAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $this->_userId = $this->get('security.context')->getToken()->getUser()->getId();
        $entities = $em->getRepository('KlientBundle:Portfel')->findBy(array('user_id' => $this->_userId));

        return $this->render('KlientBundle:Portfel:history.html.twig', array(
                    'entities' => $entities
                ));
    }

    /**
     * Finds and displays a Portfel entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KlientBundle:Portfel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Portfel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KlientBundle:Portfel:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Displays a form to create a new Portfel entity.
     *
     */
    public function kupAction() {
        $entity = new Portfel();
        $form = $this->createForm(new PortfelType(), $entity);

        return $this->render('KlientBundle:Portfel:kup.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
                ));
    }

    /**
     * Displays a form to create a new Portfel entity.
     *
     */
    public function sprzedajAction() {

        $entity = new Portfel();
        $em = $this->getDoctrine()->getEntityManager();
        $userId = $this->get('security.context')->getToken()->getUser()->getId();
        $user = $em->getRepository('Intimisi\UserBundle\Entity\User')->find($userId);
        $entity->setUserId($user);

        $form = $this->createForm(new PortfelSprzedajType(), $entity);

        return $this->render('KlientBundle:Portfel:sprzedaj.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
                ));
    }

    /**
     * Creates a new Portfel entity.
     *
     */
    public function createAction() {

        $entity = new Portfel();
        $request = $this->getRequest();
        $form = $this->createForm(new PortfelType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $userId = $this->get('security.context')->getToken()->getUser()->getId();
            $user = $em->getRepository('Intimisi\UserBundle\Entity\User')->find($userId);
            $entity->setUserId($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('portfel_show', array('id' => $entity->getId())));
        }

        return $this->render('KlientBundle:Portfel:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
                ));
    }

    /**
     * Displays a form to edit an existing Portfel entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KlientBundle:Portfel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Portfel entity.');
        }

        $editForm = $this->createForm(new PortfelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KlientBundle:Portfel:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Edits an existing Portfel entity.
     *
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KlientBundle:Portfel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Portfel entity.');
        }

        $editForm = $this->createForm(new PortfelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('portfel_edit', array('id' => $id)));
        }

        return $this->render('KlientBundle:Portfel:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Deletes a Portfel entity.
     *
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('KlientBundle:Portfel')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Portfel entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('portfel'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
