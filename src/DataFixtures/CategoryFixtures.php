<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORIES = ['Toy', 'Immovable', 'Automotive', 'Health', 'Hardware store', 'Book'];

    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $index => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference('category' . $index, $category);
        }
        $manager->flush();
    }
}
