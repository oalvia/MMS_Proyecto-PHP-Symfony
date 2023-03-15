<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Scale;

class ScaleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $scaleArray = [
            "1:100", "1:144", "1:200", "1:32", "1:72"
        ];
        $scale = new Scale();
        $scale->setScale($scaleArray);
        $manager->persist($scale);
        $manager->flush();
    }
}
