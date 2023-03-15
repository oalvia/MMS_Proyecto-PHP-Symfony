<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Tag;

class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $tagsArray=[
            "Jet" ,"Piston Engine" ,"Turboprop" ,"Rocket engine" ,"Fighter" ,"Bomber" ,"Helicopter" ,"Glider" ,"Comercial" ,"Utility" ,"Aerobatics" ,"Amphibious" ,"Multi-Engine" ,"Biplane" ,"Balloons" ,"Gyroplane" ,"Single Engine" ,"Tricycle Gear" ,"Business Jets" ,"Taildraggers" ,"Tiltrotors" ,"Light-Sport Aircraft" ,"Floatplane" ,"Cargo planes" ,"Commercial" ,"Experimental" ,"Agricultural" ,"Trainer" ,"Fire-fighter" ,"Tanker" ,"Concept" ,"Reco" ,"Military" ,"Civil" ,"Radar" ,"Prototype"
        ];
            $tag = new Tag();
            $tag->setTags($tagsArray);
            $manager->persist($tag);
            $manager->flush();
    }
}
