<?php

namespace App\DataFixtures;

use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class ProductsFixtures extends Fixture
{
    protected $client;
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    public function load(ObjectManager $manager): void
    {
            $response = $this->client->request(
                'GET',
                "http://localhost:3000/products"
            );
            $apiResponse = $response->toArray();
            foreach($apiResponse as $apiProduct){
            $productB = new Products();
            $productB->setScale($apiProduct['scale']);
            $productB->setBrand($apiProduct['brand']);
            $productB->setType($apiProduct['type']);
            $productB->addTag($apiProduct['tags']);
            $manager->persist($productB);
        }
               $manager->flush();
        }
    }
