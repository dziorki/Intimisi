<?php

namespace Intimisi\KlientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="notowania"))
 */
class Notowania {

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var stirng $nazwa
     */
    private $nazwa;

    /**
     * @var float $kurs_biezacy
     */
    private $kurs_biezacy;

    /**
     * @var integer $zmiana_procentowa
     */
    private $zmiana_procentowa;

    /**
     * @var integer $zmiana_kwotowa
     */
    private $zmiana_kwotowa;

    /**
     * @var integer $kurs_odniesienia
     */
    private $kurs_odniesienia;

    /**
     * @var integer $kurs_otwarcia
     */
    private $kurs_otwarcia;

    /**
     * @var integer $kurs_min
     */
    private $kurs_min;

    /**
     * @var integer $kurs_max
     */
    private $kurs_max;

    /**
     * @var integer $wolumen
     */
    private $wolumen;

    /**
     * @var bigint $obrot
     */
    private $obrot;

    /**
     * @var datetime $czas
     */
    private $czas;

    /**
     * @var Intimisi\KlientBundle\Entity\Portfel
     */
    private $portfel;

    public function __construct() {
        $this->portfel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->czas = new \DateTime("now");
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     */
    public function setNazwa($nazwa) {
        $this->nazwa = $nazwa;
    }

    /**
     * Get nazwa
     *
     * @return string 
     */
    public function getNazwa() {
        return $this->nazwa;
    }

    /**
     * Set kurs_biezacy
     *
     * @param float $kursBiezacy
     */
    public function setKursBiezacy($kursBiezacy) {
        $this->kurs_biezacy = $kursBiezacy;
    }

    /**
     * Get kurs_biezacy
     *
     * @return integer 
     */
    public function getKursBiezacy() {
        return $this->kurs_biezacy;
    }

    /**
     * Set zmiana_procentowa
     *
     * @param integer $zmianaProcentowa
     */
    public function setZmianaProcentowa($zmianaProcentowa) {
        $this->zmiana_procentowa = $zmianaProcentowa;
    }

    /**
     * Get zmiana_procentowa
     *
     * @return integer 
     */
    public function getZmianaProcentowa() {
        return $this->zmiana_procentowa;
    }

    /**
     * Set zmiana_kwotowa
     *
     * @param integer $zmianaKwotowa
     */
    public function setZmianaKwotowa($zmianaKwotowa) {
        $this->zmiana_kwotowa = $zmianaKwotowa;
    }

    /**
     * Get zmiana_kwotowa
     *
     * @return integer 
     */
    public function getZmianaKwotowa() {
        return $this->zmiana_kwotowa;
    }

    /**
     * Set kurs_odniesienia
     *
     * @param integer $kursOdniesienia
     */
    public function setKursOdniesienia($kursOdniesienia) {
        $this->kurs_odniesienia = $kursOdniesienia;
    }

    /**
     * Get kurs_odniesienia
     *
     * @return integer 
     */
    public function getKursOdniesienia() {
        return $this->kurs_odniesienia;
    }

    /**
     * Set kurs_otwarcia
     *
     * @param integer $kursOtwarcia
     */
    public function setKursOtwarcia($kursOtwarcia) {
        $this->kurs_otwarcia = $kursOtwarcia;
    }

    /**
     * Get kurs_otwarcia
     *
     * @return integer 
     */
    public function getKursOtwarcia() {
        return $this->kurs_otwarcia;
    }

    /**
     * Set kurs_min
     *
     * @param integer $kursMin
     */
    public function setKursMin($kursMin) {
        $this->kurs_min = $kursMin;
    }

    /**
     * Get kurs_min
     *
     * @return integer 
     */
    public function getKursMin() {
        return $this->kurs_min;
    }

    /**
     * Set kurs_max
     *
     * @param integer $kursMax
     */
    public function setKursMax($kursMax) {
        $this->kurs_max = $kursMax;
    }

    /**
     * Get kurs_max
     *
     * @return integer 
     */
    public function getKursMax() {
        return $this->kurs_max;
    }

    /**
     * Set wolumen
     *
     * @param integer $wolumen
     */
    public function setWolumen($wolumen) {
        $this->wolumen = $wolumen;
    }

    /**
     * Get wolumen
     *
     * @return integer 
     */
    public function getWolumen() {
        return $this->wolumen;
    }

    /**
     * Set obrot
     *
     * @param bigint $obrot
     */
    public function setObrot($obrot) {
        $this->obrot = $obrot;
    }

    /**
     * Get obrot
     *
     * @return bigint 
     */
    public function getObrot() {
        return $this->obrot;
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
     * Add portfel
     *
     * @param Intimisi\KlientBundle\Entity\Portfel $portfel
     */
    public function addPortfel(\Intimisi\KlientBundle\Entity\Portfel $portfel) {
        $this->portfel[] = $portfel;
    }

    /**
     * Get portfel
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPortfel() {
        return $this->portfel;
    }

    /**
     * json
     * @return type
     */
    public function jsonSerialize() {
        return array(
            'kurs_biezacy' => bcdiv($this->kurs_biezacy, 100, 2),
            'nazwa' => $this->nazwa,
        );
    }

}