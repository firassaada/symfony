<?php

namespace App\DataFixtures;

use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PersooneFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Factory::create('fr_FR') ;
        for($i=0;$i<20;$i++){
            $personne = new Personne() ;
            $personne->setFirstName($faker->firstname) ;
            $personne->setName($faker->lastname) ;
            $personne->setAge($faker->numberBetween(18,50)) ;
             $manager->persist($personne);
        }
        $manager->flush();
    }
}
