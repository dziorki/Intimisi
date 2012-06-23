<?php

namespace Intimisi\UserBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use Intimisi\UserBundle\Entity\User;

class Registration
{
    /**
     * @Assert\Type(type="Intimisi\UserBundle\Entity\User")
     */
    protected $user;

    /**
     * @Assert\True()
     * @Assert\NotBlank()(message="You must check this field")
     */
    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (boolean)$termsAccepted;
    }
}
?>
