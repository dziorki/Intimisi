<?php

namespace Intimisi\KlientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intimisi\KlientBundle\Entity\Aktualnosci
 */
class Aktualnosci
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $tytul
     */
    private $tytul;

    /**
     * @var text $zawartosc
     */
    private $zawartosc;

    /**
     * @var string $slug
     */
    private $slug;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tytul
     *
     * @param string $tytul
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;
    }

    /**
     * Get tytul
     *
     * @return string 
     */
    public function getTytul()
    {
        return $this->tytul;
    }

    /**
     * Set zawartosc
     *
     * @param text $zawartosc
     */
    public function setZawartosc($zawartosc)
    {
        $this->zawartosc = $zawartosc;
    }

    /**
     * Get zawartosc
     *
     * @return text 
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}