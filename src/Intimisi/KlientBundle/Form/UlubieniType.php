<?php

namespace Intimisi\KlientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UlubieniType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('user_id')
            ->add('ulubiony_id')
            ->add('opis')
        ;
    }

    public function getName()
    {
        return 'intimisi_klientbundle_ulubienitype';
    }
}
