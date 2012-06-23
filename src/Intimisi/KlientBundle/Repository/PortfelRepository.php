<?php

namespace Intimisi\KlientBundle\Repository;

use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityRepository;
use Intimisi\UserBundle\Entity\User;
use \Doctrine\Common\Util\Debug;

/**
 * Portfel repository
 */
class PortfelRepository extends EntityRepository {

    /**
     * Lista akcji zsumowanych
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function findAllGrouped($user_id) {
        $query = $this->_em->createQuery('
            SELECT sum(p.cena), c.nazwa, sum(p.cena) cena, sum(p.ilosc) ilosc, sum(p.prowizja) prowizja
            FROM KlientBundle:Portfel p 
            JOIN p.nazwa c
            WHERE p.user_id = :user_id
            GROUP BY c.nazwa'
                )->setParameter('user_id', $user_id);
        return $query->getResult();
    }

    /**
     * Lista akcji zsumowanych
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function findAllGroupedCunt($user_id) {
        $query = $this->_em->createQuery('
            SELECT c.nazwa
            FROM KlientBundle:Portfel p 
            JOIN p.nazwa c
            WHERE p.user_id = :user_id
            GROUP BY c.nazwa'
                )->setParameter('user_id', $user_id);
        return count($query->getResult());
    }

    /**
     * Lista akcji po uzytkowniku
     * @param type $user_id
     * @return type 
     */
    public function findAllByUser($user_id) {
        $query = $this->_em->createQueryBuilder('p')
                ->join('n', 'nazwa')
                ->where('user_id = :user_id')
                ->groupBy('nazwa')
                ->setParameter('user_id', $user_id);
        return $query;
    }

    public function findAllPortfel() {

        $conn = $this->getEntityManager()->getConnection();

        $query = 'SELECT u.nazwa_portfela, u.username, sum(p.cena*p.ilosc - n.kurs_biezacy*p.ilosc) as zysk FROM portfel p 
            JOIN users u ON u.id = p.user_id
            JOIN notowania n ON p.nazwa_id = n.id
            WHERE u.nazwa_portfela IS NOT NULL
            AND u.ustawienia_prywatnosci = false
            GROUP BY u.username, u.nazwa_portfela
            ';

        return $conn->executeQuery($query)->fetchAll();
    }

    public function hBarPortfel($user_id) {

        $conn = $this->getEntityManager()->getConnection();

        $query = 'SELECT 
            n.nazwa, 
            sum(p.cena*p.ilosc) as koszty,
            sum(n.kurs_biezacy*p.ilosc) as warte
            FROM portfel p 
            JOIN users u ON u.id = p.user_id
            JOIN notowania n ON p.nazwa_id = n.id
            WHERE p.user_id = ?
            GROUP BY n.nazwa
            ';

        return $conn->executeQuery($query, array($user_id))->fetchAll();
    }

    public function countOperation($user_id) {

        $query = $this->_em->createQuery('
            SELECT p.id
            FROM KlientBundle:Portfel p 
            WHERE p.user_id = :user_id'
                )->setParameter('user_id', $user_id);
        return count($query->getResult());
    }

}
