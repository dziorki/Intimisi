<?php

namespace Intimisi\KlientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Intimisi\KlientBundle\Repository\PortfelRepository")
 * @ORM\Table(name="portfel")
 */
class Portfel {

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var float $cena
     */
    private $cena;

    /**
     * @var integer $ilosc
     */
    private $ilosc;

    /**
     * @var integer $prowizja
     */
    private $prowizja;

    /**
     * @var datetime $czas
     */
    private $czas;

    /**
     * @var Intimisi\KlientBundle\Entity\Notowania
     */
    private $nazwa;

    /**
     * @var Intimisi\UserBundle\Entity\User
     */
    private $user_id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cena
     *
     * @param integer $cena
     */
    public function setCena($cena) {
        $this->cena = intval(str_replace(',', '', $cena) * 100);
    }

    /**
     * Get cena
     *
     * @return integer 
     */
    public function getCena() {
        return number_format(bcdiv($this->cena, 100, 2), 2, '.', ',');
    }

    /**
     * Set ilosc
     *
     * @param integer $ilosc
     */
    public function setIlosc($ilosc) {
        $this->ilosc = str_replace(",", "", $ilosc);
    }

    /**
     * Get ilosc
     *
     * @return integer 
     */
    public function getIlosc() {
        return $this->ilosc;
    }

    /**
     * Set prowizja
     *
     * @param integer $prowizja
     */
    public function setProwizja($prowizja) {

        $this->prowizja = intval(str_replace(',', '', $prowizja) * 100);
    }

    /**
     * Get prowizja
     *
     * @return integer 
     */
    public function getProwizja() {
        return bcdiv($this->prowizja, 100, 2);
    }

    /**
     * Set czas
     *
     * @param datetime $czas
     */
    public function setCzas($czas) {
        $this->czas = $czas;
    }

    /**
     * Get czas
     *
     * @return datetime 
     */
    public function getCzas() {
        return $this->czas;
    }

    /**
     * Set nazwa
     *
     * @param Intimisi\KlientBundle\Entity\Notowania $nazwa
     */
    public function setNazwa(\Intimisi\KlientBundle\Entity\Notowania $nazwa) {
        $this->nazwa = $nazwa;
    }

    /**
     * Get nazwa
     *
     * @return Intimisi\KlientBundle\Entity\Notowania 
     */
    public function getNazwa() {
        return $this->nazwa;
    }

    /**
     * Set user_id
     *
     * @param Intimisi\UserBundle\Entity\User $userId
     */
    public function setUserId(\Intimisi\UserBundle\Entity\User $userId) {
        $this->user_id = $userId;
    }

    /**
     * Get user_id
     *
     * @return Intimisi\UserBundle\Entity\User 
     */
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * @var Intimisi\KlientBundle\Entity\Notowania
     */
    private $notowania;

    /**
     * Set notowania
     *
     * @param Intimisi\KlientBundle\Entity\Notowania $notowania
     */
    public function setNotowania(\Intimisi\KlientBundle\Entity\Notowania $notowania) {
        $this->notowania = $notowania;
    }

    /**
     * Get notowania
     *
     * @return Intimisi\KlientBundle\Entity\Notowania 
     */
    public function getNotowania() {
        return $this->notowania;
    }

    public function __construct() {

        $this->czas = new \DateTime('now');
        $this->prowizja = 0;
        $this->cena = 0;
        $this->ilosc = 0;
    }
    
    public function jsonSerialize() {
        return array(
            'ilosc' => $this->getIlosc()
        );
    }

}