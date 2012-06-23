<?php

namespace Intimisi\KlientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Intimisi\KlientBundle\Entity\Notowania;

/**
 * Notowania controller.
 *
 */
class NotowaniaController extends Controller {

    /**
     * Lists all Notowania entities.
     *
     */
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

        return $this->render('KlientBundle:Notowania:index.html.twig', array(
                    'entities' => $entities,
                    'wzroslo' => $wzroslo,
                    'zmalalo' => $zmalalo,
                    'bez_zmian' => $bez_zmian,
                    'ilosc' => $ilosc
                ));
    }


}
