<?php

namespace Intimisi\KlientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intimisi\KlientBundle\Entity\Pomoc
 */
class Pomoc
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     *
     * @var string $tytul 
     */
    private $tytul;
    
    /**
     * @var text $opis
     */
    private $opis;


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
     * Set user_id
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    }
    
    public function getTytul() {
        return $this->tytul;
    }

    public function setTytul($tytul) {
        $this->tytul = $tytul;
    }

        /**
     * Set opis
     *
     * @param string $opis
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
    }

    /**
     * Get opis
     *
     * @return string 
     */
    public function getOpis()
    {
        return $this->opis;
    }
    
}