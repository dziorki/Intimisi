<?php

namespace Intimisi\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;


/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="users")
 * @DoctrineAssert\UniqueEntity(fields="username", message="Nazwa użytkownika jest już zajęta.")
 * @DoctrineAssert\UniqueEntity(fields="email", message="E-mail zajęty.")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length="255", name="first_name", nullable=true)
     * 
     * @var string $firstName
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length="255", name="last_name", nullable=true)
     * 
     * @var string $lastName
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", length="255", name="nazwa_portfela", nullable=true)
     * @var string 
     */
    protected $nazwaPortfela;

    /**
     * @ORM\Column(type="integer", name="ustawienia_prowizji_wartosc", nullable=true)
     * @var integer 
     */
    protected $ustawieniaProwizjiWartosc;

    /**
     * @ORM\Column(type="integer", name="ustawienia_prowizji_procent", nullable=true)
     * @var integer $ustawieniaProwizjiProcent
     */
    protected $ustawieniaProwizjiProcent;

    /**
     * @ORM\Column(type="boolean", name="ustawienia_prywatnosci", nullable=true)
     * @var boolean 
     */
    protected $ustawieniaPrywatnosci;

//    /**
//     * @ORM\Column(type="string", length="255", name="avatar_path", nullable=true)
//     * @var string 
//     */
//    protected $avatarPath;
//
//    /**
//     * @Assert\File(maxSize="6000000") 
//     */
//    protected $avatarFile;

    
    /**
     * Constructs a new instance of User
     */
    public function __construct() {
        parent::__construct();
        $this->createdAt = new \DateTime();
    }

    /**
     * Gets the id.
     * 
     * @return integer The id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Gets the user's first name.
     * 
     * @return string The first name
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Sets the user's first name.
     * 
     * @param string $value The first name
     */
    public function setFirstName($value) {
        $this->firstName = $value;
    }

    /**
     * Gets the user's last name.
     * 
     * @return string The last name
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Sets the user's last name.
     * 
     * @param string $value The last name
     */
    public function setLastName($value) {
        $this->lastName = $value;
    }

    /**
     *
     * @return type 
     */
    public function getNazwaPortfela() {
        return $this->nazwaPortfela;
    }

    /**
     *
     * @param type $nazwaPortfela 
     */
    public function setNazwaPortfela($nazwaPortfela) {
        $this->nazwaPortfela = $nazwaPortfela;
    }

    /**
     *
     * @return type 
     */
    public function getUstawieniaProwizjiWartosc() {
        return $this->ustawieniaProwizjiWartosc;
    }

    /**
     *
     * @param type $ustawieniaProwizjiWartosc 
     */
    public function setUstawieniaProwizjiWartosc($ustawieniaProwizjiWartosc) {
        $this->ustawieniaProwizjiWartosc = $ustawieniaProwizjiWartosc;
    }

    /**
     *
     * @return type 
     */
    public function getUstawieniaProwizjiProcent() {
        return bcdiv($this->ustawieniaProwizjiProcent, 100, 2);
    }

    /**
     *
     * @param integer $ustawieniaProwizjiProcent 
     */
    public function setUstawieniaProwizjiProcent($ustawieniaProwizjiProcent) {
        $this->ustawieniaProwizjiProcent = intval(str_replace('%', '', $ustawieniaProwizjiProcent * 100));
    }

    /**
     *
     * @return boolean 
     */
    public function getUstawieniaPrywatnosci() {
        return $this->ustawieniaPrywatnosci;
    }

    /**
     *
     * @param boolean $ustawieniaPrywatnosci 
     */
    public function setUstawieniaPrywatnosci($ustawieniaPrywatnosci) {
        $this->ustawieniaPrywatnosci = $ustawieniaPrywatnosci;
    }

//    public function getAvatarPath() {
//        return $this->avatarPath;
//    }
//
//    public function setAvatarPath($avatarPath) {
//        $this->avatarPath = $avatarPath;
//    }
//
//    public function getAvatarFile() {
//        return $this->avatarFile;
//    }
//
//    public function setAvatarFile($avatarFile) {
//        $this->avatarFile = $avatarFile;
//    }

}