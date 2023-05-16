<?php

namespace App\DataFixtures;

use App\Entity\Gateau;
use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = \Faker\Factory::create();

        /*for ($i = 0; $i<50; $i++) {

            $gateau = new Gateau();
            $gateau->setName($faker->name());
            $gateau->setDescription($faker->text());

            for ($j = 0; $j<2; $j++) {
                $ingredient = new Ingredient();

                $ingredient->setName($faker->name());
                $manager->persist($ingredient);

                $gateau->addIngredient($ingredient);
            }


            $manager->persist($gateau);
        }
        */
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
