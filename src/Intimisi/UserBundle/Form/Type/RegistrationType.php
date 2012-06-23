<?php

namespace Intimisi\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilder;

class RegistrationType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder->add('user', new UserType());
        $builder->add('terms', 'checkbox', array(
            'label' => 'Potwierdź',
            'property_path' => 'termsAccepted',
            'attr' => array('class' => 'validate[required]', 'id' => 'req10'),
                )
        );
    }

    public function getName() {
        return 'registration';
    }

}