<?php

namespace Intimisi\KlientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UstawieniaType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('ustawienia_prowizji_wartosc')
                ->add('ustawienia_prowizji_procent', 'percent')
                ->add('nazwa_portfela', 'text', array(
                    'attr' => array('class' => 'validate[required]')
                ))
                ->add('ustawienia_prywatnosci', 'choice', array(
                    'choices' => array('1' => 'Portfel prywatny', '0' => 'Portfel w pełni publiczny'),
                    'required' => true,
                    'expanded' => true,
                    'attr' => (array('class' => 'validate[required]')),
                ));



        ;
    }

    public function getName() {
        return 'intimisi_klientbundle_ustawieniatype';
    }

}

