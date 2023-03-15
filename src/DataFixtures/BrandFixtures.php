<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Brand;

class BrandFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $brandArray = [
            "ACADEMY" ,"AIRFIX" ,"AZUR" ,"CLASSIC PLANE" ,"CMK" ,"CONDOR" ,"DML/DRAGON" ,"EDUARD" ,"IBG Models" ,"FINE MOLDS" ,"FUJIMI" ,"HASEGAWA" ,"HELLER" ,"HOBBYCRAFT" ,"ICM" ,"ITALERI" ,"KANGNAM" ,"KP" ,"M. PRO-MODELLER" ,"MACH 2" ,"MATCHBOX" ,"MINICRAFT" ,"MODELCRAFT" ,"MONOGRAM" ,"MPM" ,"PREMIERE" ,"REVELL" ,"RODEN" ,"SMER" ,"SPECIAL HOBBY" ,"SWORD" ,"TAMIYA" ,"TRUMPETER" ,"ZVEZDA"
        ];
        $brand = new Brand();
        $brand->setBrand($brandArray);
        $manager->persist($brand);
        $manager->flush();
    }
}
