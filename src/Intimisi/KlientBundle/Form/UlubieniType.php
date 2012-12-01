<?php

namespace Intimisi\KlientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;

class UlubieniType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('ulubiony_id', 'entity', array(
                    'class' => 'UserBundle:User',
                    'attr' => array('data-placeholder' => 'Wybierz użytkownika...', 'class' => 'chzn-select validate[required]', 'tabindex' => '2', 'style' => 'width:200px;'),
                    'property' => 'username',
                    'query_builder' =>
                    function(EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->where('u.ustawieniaPrywatnosci = false');
                    }))
            ->add('opis','text')
        ;
    }

    public function getName()
    {
        return 'intimisi_klientbundle_ulubienitype';
    }
}
