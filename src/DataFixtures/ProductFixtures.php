<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class ProductFixtures extends Fixture
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
            $faker = Factory::create();
            $productA = new Product();
            $productA->setProductId($apiProduct['productId']);
            $productA->setDescription($apiProduct['description']);
            $productA->setAddDescription($faker->text(400));
            $productA->setStock($apiProduct['stock']);
            $productA->setPrice($apiProduct['price']);
            $productA->setImage($apiProduct['image']);
            $manager->persist($productA);
        }
               $manager->flush();
        }
        
    }