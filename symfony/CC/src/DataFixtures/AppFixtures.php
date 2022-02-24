<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Activity;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $admin = new User();
        $admin->setNom($faker->lastName())
            ->setPrenom($faker->name())
            ->setLogin($faker->userName())
            ->setPassword('$2y$13$LWpm5m6DYF4.GGZbjN0Jau/mfV6jYphldNtpQXGlujTUhVY0rP5NC')
            -> setRoles(["ROLE_ADMIN"]);

        $animateur = new User();
        $animateur->setNom($faker->lastName())
             ->setPrenom($faker->name())
             ->setLogin($faker->userName())
             ->setPassword('$2y$13$htF3EsNkEHc.hkn0i1sl0OiC7jpyf/Xa66i/pdcJu9LjZ2TSzm/4G')
             -> setRoles(["ROLE_ANIMATOR"]);

        $enfant = new User();
        $enfant->setNom($faker->lastName())
            ->setPrenom($faker->name())
            ->setLogin($faker->userName())
            ->setPassword('$2y$13$ehkMkMavSiEoOqn5odjrsurWvN/VcjZ6jjeeYI8q7NEfY63rRyIoy');

        $enfant2 = new User();
        $enfant2->setNom($faker->lastName())
            ->setPrenom($faker->name())
            ->setLogin($faker->userName())
            ->setPassword($faker->password(6));

        $act = new Activity();
        $act->setNom($faker->lastName())
            ->setDescription($faker->text())
            ->setAnimateur($animateur)
            ->addParticipant($enfant);

        $manager->persist($animateur);
        $manager->persist($act);
        $manager->persist($enfant);
        $manager->persist($enfant2);
        $manager->persist($admin);
        $manager->flush();
    }
}
