<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 0 ; $i < 10 ; $i++) {
            $product = new Product();
            $product->setName('Product '.$i);
            $product->setPrice(10.99 * $i+1);

            $manager->persist($product);
        }

        $manager->flush();
    }
}
