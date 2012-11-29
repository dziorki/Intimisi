<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Intimisi\KlientBundle\Form\UstawieniaType;
use Intimisi\KlientBundle\Form\UstawieniaProwizjaType;
use \Doctrine\Common\Util\Debug;

/**
 * Ustawienia controller.
 *
 */
class UstawieniaController extends Controller {

    /**
     * Ustawienia
     *
     */
    public function indexAction() {

        $entity = $this->getDoctrine()->getRepository('UserBundle:User')->find($this->get('security.context')->getToken()->getUser()->getId());

        if (!$entity)
            throw $this->createNotFoundException('Nie odnaleziono ustawień.');

        $form = $this->createForm(new UstawieniaType(), $entity);

        return $this->render('KlientBundle:Ustawienia:index.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'errors' => null
                ));
    }
    
    // <editor-fold defaultstate="collapsed" desc="staraUpdateProwizja">

    /**
     * Edits an existing Ustawienia entity.
     *
     */
    public function updateProwizjaAction() {

        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('KlientBundle:Ustawienia')->findOneBy(array('nazwa' => 'prowizja'));

        if (!$entity)
            throw $this->createNotFoundException('Nie odnaleziono ustawień.');

        $editForm = $this->createForm(new UstawieniaProwizjaType(), $entity);
        //$deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();
        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $data = $editForm->getData();
            $serialize = array('prowizja_wartosc' => $data->getProwizjaWartosc(), 'prowizja_procent' => str_replace('\%', '', $data->getProwizjaProcent()));
            $wartosc = base64_encode(serialize($serialize));
            $entity->setWartosc($wartosc);
            $em->persist($entity);
            $em->flush();
            $this->get('session')->setFlash('notice', 'Dane zostały zapisane poprawnie.');
            return $this->redirect($this->generateUrl('ustawienia'));
        }

        $validator = $this->get('validator');
        $errors = $validator->validate($form);

        return $this->render('KlientBundle:Ustawienia:index.html.twig', array(
                    'errors' => $errors,
                    'entity' => $entity,
                    'form_prowizja' => $editForm->createView(),
                        //'delete_form' => $deleteForm->createView(),
                ));
    }
    // </editor-fold>

    
    /**
     * Edits an existing Ustawienia entity.
     *
     */
    public function updateAction() {

        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('UserBundle:User')->find($this->get('security.context')->getToken()->getUser()->getId());

        if (!$entity)
            throw $this->createNotFoundException('Nie odnaleziono ustawień.');

        $editForm = $this->createForm(new UstawieniaType(), $entity);

        $request = $this->getRequest();
        $editForm->bindRequest($request);

        //if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            $this->get('session')->setFlash('notice', 'Dane zostały zapisane poprawnie.');
            return $this->redirect($this->generateUrl('ustawienia'));
        //}

        $validator = $this->get('validator');
        $errors = $validator->validate($editForm);

        return $this->render('KlientBundle:Ustawienia:index.html.twig', array(
                    'errors' => $errors,
                    'entity' => $entity,
                    'form' => $editForm->createView(),
                        //'delete_form' => $deleteForm->createView(),
                ));
    }

}
