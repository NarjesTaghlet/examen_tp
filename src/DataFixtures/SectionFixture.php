<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Etudiant;
use App\Entity\Section;

class SectionFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker=Factory::create();
        for ($i=0; $i < 30; $i++) {
            $section = new Section();
            $section->setDesignation($faker->word);
            for ($j=0; $j <10; $j++) {
                $etudiant = new Etudiant();
                $etudiant->setNom($faker->name);
                $etudiant->setPrenom($faker->firstName);
                $section->addEtudiant($etudiant);
                $etudiant->setSection($section);
                $manager->persist($etudiant);
            }
            $manager->persist($section);
        }
        for ($i=0; $i < 30; $i++) {
            $etudiant = new Etudiant();
            $etudiant->setNom($faker->name);
            $etudiant->setPrenom($faker->firstName);
            $manager->persist($etudiant);
        }
        $manager->flush();
    }
}
