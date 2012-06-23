<?php

namespace Intimisi\KlientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;
use \Doctrine\Common\Util\Debug;
use Doctrine\Common\Persistence\ObjectManager;

class PortfelSprzedajType extends AbstractType {


    public function buildForm(FormBuilder $builder, array $options) {

        $user_id = $builder->getData()->getUserId()->getId();

        $builder
                ->add('nazwa', 'entity', array(
                    'class' => 'Intimisi\KlientBundle\Entity\Notowania',
                    'attr' => array('data-placeholder' => 'Wybierz akcje...', 'class' => 'chzn-select validate[required]', 'tabindex' => '2', 'style' => 'width:200px;'),
                    'property' => 'nazwa',
                    'query_builder' =>
                    function(EntityRepository $er) use ($user_id) {
                        return $er->createQueryBuilder('n')
                                ->join('n.portfel', 'p')
                                ->where('p.user_id = :user_id')
                                ->setParameter('user_id', intval($user_id))

                        ;
                    }))
                ->add('cena', 'text', array(
                    'attr' => array('class' => 'validate[required,min[0.01]]'),
                ))
                ->add('ilosc', 'text', array(
                    'attr' => array('class' => 'validate[required,custom[integer],min[1],max[5]]'),
                ))
                ->add('prowizja', 'text', array(
                    'attr' => array('class' => 'validate[required,min[0]]'),
                ))


        ;
    }

    public function getName() {
        return 'intimisi_klientbundle_portfeltype';
    }

}
