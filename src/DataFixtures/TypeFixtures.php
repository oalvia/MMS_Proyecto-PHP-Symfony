<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Type;

class TypeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $typeArray = [
            "Base Kit", "Detailing Set", "Aftermarket Decals", "Multimedia Kit"
        ];
        $type = new Type();
        $type->setType($typeArray);
        $manager->persist($type);
        $manager->flush();
    }
}
