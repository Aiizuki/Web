<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Categorie;
use App\Entity\Film;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for($i=0; $i<5; $i++){
            $category = new Categorie();
            $category->setNom($faker->word());
            $manager->persist($category);
        }

        $category = new Categorie();
        $category->setNom("test");
        $manager->persist($category);

        for($j=0; $j<12; $j++){
            $film = new Film();
            $film->setTitre($faker->word());
            $film->setDuree($faker->numberBetween(0,120));
            $film->setVersion("originale");
            $film->setResume($faker->text());
            $film->setCategorie("test");
            $manager->persist($film);
        }

        $manager->flush();
    }
}
