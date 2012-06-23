<?php

namespace Intimisi\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder->add('username', 'text', array(

            'required' => false,
            'trim' => true,
            'max_length' => 30,
            'attr' => array('class' => 'validate[required]', 'id' => 'req1'),
        ));
        $builder->add('email', 'email', array(
            'label' => "E-mail",
            'required' => false,
            'max_length' => 50,
            'attr' => array('class' => 'validate[required,custom[email]]', 'id' => 'req2'),
        ));
        $builder->add('plainPassword', 'repeated', array(
            'first_name' => 'password',
            'second_name' => 'confirm',
            'required' => false,
            'type' => 'password',
            'invalid_message' => 'Podane hasła nie zgadzają się.',
            'options' => array(
                'label' => 'Password',
                'attr' => array('class' => 'validate[required]', 'id' => 'req3'),
            ),
        ));
    }

    public function getDefaultOptions(array $options) {
        return array('data_class' => 'Intimisi\UserBundle\Entity\User');
    }

    public function getName() {
        return 'register_user';
    }

}