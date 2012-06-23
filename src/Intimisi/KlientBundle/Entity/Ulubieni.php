<?php

namespace Intimisi\KlientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intimisi\KlientBundle\Entity\Ulubieni
 */
class Ulubieni
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $user_id
     */
    private $user_id;

    /**
     * @var integer $ulubiony_id
     */
    private $ulubiony_id;

    /**
     * @var string $opis
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

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set ulubiony_id
     *
     * @param integer $ulubionyId
     */
    public function setUlubionyId($ulubionyId)
    {
        $this->ulubiony_id = $ulubionyId;
    }

    /**
     * Get ulubiony_id
     *
     * @return integer 
     */
    public function getUlubionyId()
    {
        return $this->ulubiony_id;
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