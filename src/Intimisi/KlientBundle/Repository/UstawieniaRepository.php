<?php

namespace Intimisi\KlientBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UstawieniaRepository
 */
class UstawieniaRepository extends EntityRepository {

    private $prowizjaWartosc;
    private $prowizjaProcent;
    
    /**
     * Pobiera wartosc ustawienia
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getSample() {
        $query = $this->_em->createQuery('
            SELECT u.wartosc
            FROM KlientBundle:Ustawienia
            WHERE u.nazwa = :id
            ')->setParameter('id', 1);

        return $query->getResult();
    }
    
    public function getProwizjaWartosc() {
        return $this->prowizjaWartosc;
    }

    public function setProwizjaWartosc($prowizjaWartosc) {
        $this->prowizjaWartosc = $prowizjaWartosc;
    }

    public function getProwizjaProcent() {
        return $this->prowizjaProcent;
    }

    public function setProwizjaProcent($prowizjaProcent) {
        $this->prowizjaProcent = $prowizjaProcent;
    }



}