<?php

namespace Intimisi\KlientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UstawieniaProwizjaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('prowizja_wartosc')
            ->add('prowizja_procent', 'text', array(
                'attr' => (array('class' => 'maskPct validate[required]'))
            ))

        ;
    }

    public function getName()
    {
        return 'intimisi_klientbundle_ustawieniatype';
    }
}
