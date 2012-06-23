<?php

namespace Intimisi\KlientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PortfelType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('nazwa', 'entity', array(
                    'class' => 'Intimisi\KlientBundle\Entity\Notowania',
                    'attr' => array('data-placeholder' => 'Wybierz akcje...', 'class' => 'chzn-select', 'tabindex' => '2', 'style' => 'width:200px;'),
                    'property' => 'nazwa'))
                ->add('cena','text')
                ->add('ilosc','text')
                ->add('prowizja','text')


        ;
    }

    public function getName() {
        return 'intimisi_klientbundle_portfeltype';
    }

}
