<?php

namespace Intimisi\KlientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;

class BlogType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('name')
                ->add('url')
                ->add('description')
                ->add('status', 'checkbox', array(
                    'required' => false,
                ))
                ->add('category_id', 'entity', array(
                    'class' => 'Intimisi\KlientBundle\Entity\Category',
                    'property' => 'name'))
                ->add('user_id', 'entity', array(
                    'class' => 'Intimisi\UserBundle\Entity\User',
                    'property' => 'username'))
        ;
    }

    public function getName() {
        return 'intimisi_klientbundle_blogtype';
    }

}
