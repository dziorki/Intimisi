<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Intimisi\KlientBundle\Entity\Ulubieni;
use Intimisi\KlientBundle\Form\UlubieniType;

/**
 * Ulubieni controller.
 *
 */
class UlubieniController extends Controller
{
    /**
     * Lists all Ulubieni entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('KlientBundle:Ulubieni')->findAll();

        return $this->render('KlientBundle:Ulubieni:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Ulubieni entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KlientBundle:Ulubieni')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ulubieni entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KlientBundle:Ulubieni:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Ulubieni entity.
     *
     */
    public function newAction()
    {
        $entity = new Ulubieni();
        $form   = $this->createForm(new UlubieniType(), $entity);

        return $this->render('KlientBundle:Ulubieni:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Ulubieni entity.
     *
     */
    public function createAction()
    {
        $entity  = new Ulubieni();
        $request = $this->getRequest();
        $form    = $this->createForm(new UlubieniType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ulubieni_show', array('id' => $entity->getId())));
            
        }

        return $this->render('KlientBundle:Ulubieni:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Ulubieni entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KlientBundle:Ulubieni')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ulubieni entity.');
        }

        $editForm = $this->createForm(new UlubieniType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KlientBundle:Ulubieni:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Ulubieni entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KlientBundle:Ulubieni')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ulubieni entity.');
        }

        $editForm   = $this->createForm(new UlubieniType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ulubieni_edit', array('id' => $id)));
        }

        return $this->render('KlientBundle:Ulubieni:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ulubieni entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('KlientBundle:Ulubieni')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ulubieni entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ulubieni'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
