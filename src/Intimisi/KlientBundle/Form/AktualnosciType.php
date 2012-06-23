<?php

namespace Intimisi\KlientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AktualnosciType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('tytul')
            ->add('zawartosc')
            ->add('slug')
        ;
    }

    public function getName()
    {
        return 'intimisi_klientbundle_aktualnoscitype';
    }
}
