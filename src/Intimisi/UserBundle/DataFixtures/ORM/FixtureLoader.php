<?php

namespace Intimisi\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Intimisi\UserBundle\Entity\User;
use FOS\UserBundle\Util\UserManipulator;


class LoadUserData implements FixtureInterface {

    public function load(ObjectManager $manager) {

        // create a user
        $user = new User();
        $user->setFirstName('Tomasz');
        $user->setLastName('Dziorek');
        $user->setEmail('dziorki@o2.pl');
        $user->setUsername('admin');
        $user->setPlainPassword('admin');
        $user->setEnabled('true');
        $user->setLocked('false');
        $user->setSuperAdmin(true);

        $manager->persist($user);
        $manager->flush();
    }


    public function getOrder() {
        return 1;
    }

}