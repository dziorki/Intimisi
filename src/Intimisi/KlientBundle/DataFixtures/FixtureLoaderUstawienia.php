<?php

namespace Intimisi\KlientBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Intimisi\KlientBundle\Entity\Ustawienia;

class LoadUstawieniaData implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $ustawienia = new Ustawienia();
        $ustawienia->setNazwa('prowizja');
        $ustawienia->setProwizjaProcent('13');
        $ustawienia->setProwizjaWartosc('2');

        $serialize = array('prowizja_wartosc' => '1', 'prowizja_procent' => '1');
        $wartosc = base64_encode(serialize($serialize));
        $ustawienia->setWartosc($wartosc);

        $manager->persist($ustawienia);
        $manager->flush();
    }

    public function getOrder() {
        return 4;
    }

}