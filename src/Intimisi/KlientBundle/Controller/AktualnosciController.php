<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Intimisi\KlientBundle\Entity\Aktualnosci;
use Intimisi\KlientBundle\Form\AktualnosciType;

/**
 * Aktualnosci controller.
 *
 */
class AktualnosciController extends Controller
{
    /**
     * Lists all Aktualnosci entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('KlientBundle:Aktualnosci')->findAll();

        return $this->render('KlientBundle:Aktualnosci:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Aktualnosci entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KlientBundle:Aktualnosci')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Aktualnosci entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KlientBundle:Aktualnosci:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Aktualnosci entity.
     *
     */
    public function newAction()
    {
        $entity = new Aktualnosci();
        $form   = $this->createForm(new AktualnosciType(), $entity);

        return $this->render('KlientBundle:Aktualnosci:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Aktualnosci entity.
     *
     */
    public function createAction()
    {
        $entity  = new Aktualnosci();
        $request = $this->getRequest();
        $form    = $this->createForm(new AktualnosciType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('aktualnosci_show', array('id' => $entity->getId())));
            
        }

        return $this->render('KlientBundle:Aktualnosci:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Aktualnosci entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KlientBundle:Aktualnosci')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Aktualnosci entity.');
        }

        $editForm = $this->createForm(new AktualnosciType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KlientBundle:Aktualnosci:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Aktualnosci entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('KlientBundle:Aktualnosci')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Aktualnosci entity.');
        }

        $editForm   = $this->createForm(new AktualnosciType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('aktualnosci_edit', array('id' => $id)));
        }

        return $this->render('KlientBundle:Aktualnosci:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Aktualnosci entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('KlientBundle:Aktualnosci')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Aktualnosci entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('aktualnosci'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
