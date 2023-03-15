<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MMS_MainController extends AbstractController
{

    #[Route('/item', name:'showItem')]
    public function showItem()
    {
        $item = [
            'productId' => 'ACA1602',
            'scale' => '1:72',
            'brand' => 'ACADEMY',
            'description' => 'Dassault-Breguet Super Entendard',
            'type' => 'Base Kit',
            'tags' => ['Military', 'Jet', 'Fighter'],
            'addDescription' => 'More information coming soon',
            'stock' => 1,
            'price' => 10,
            'score' => 3,
            'image' => 'ACA1602.jpg'
        ];
        return $this->render('products/itemDetail.html.twig', ['item' => $item]);
    }
    #[Route('/itemList' , name:'showItemList')]
    public function showItemList()
    {
        $itemList = [
            [
                'productId' => 'ACA1602', 'scale' => '1:72', 'brand' => 'ACADEMY', 'description' => 'Dassault-Breguet Super Entendard', 'type' => 'Base Kit', 'tags' => ['Military', 'Jet', 'Fighter'], 'addDescription' => 'More information coming soon', 'stock' => 1, 'price' => 10, 'score' => 3, 'image' => 'ACA1602.jpg'
            ],
            [
                'productId' => 'ACA1657', 'scale' => '1:72', 'brand' => 'ACADEMY', 'description' => 'Vought F4U-1 Corsair', 'type' => 'Base Kit', 'tags' => ['Military', 'Piston Engine', 'Fighter'], 'addDescription' => 'More information coming soon', 'stock' => 1, 'price' => 11, 'score' => 3, 'image' => 'ACA1657.jpg'
            ],
            [
                'productId' => 'ACA1660', 'scale' => '1:72', 'brand' => 'ACADEMY', 'description' => 'Focke Wulf 190-D9', 'type' => 'Base Kit', 'tags' => ['Military', 'Piston Engine', 'Fighter'], 'addDescription' => 'More information coming soon', 'stock' => 1, 'price' => 12, 'score' => 3, 'image' => 'ACA1660.jpg'
            ],
            [
                'productId' => 'ACA1661', 'scale' => '1:72', 'brand' => 'ACADEMY', 'description' => 'Fiesler Fi-156 Storch', 'type' => 'Base Kit', 'tags' => ['Military', 'Piston Engine', 'Fighter'], 'addDescription' => 'More information coming soon', 'stock' => 1, 'price' => 13, 'score' => 3, 'image' => 'ACA1661.jpg'
            ],
            [
                'productId' => 'ACA1662', 'scale' => '1:72', 'brand' => 'ACADEMY', 'description' => 'North American T-6G Texan', 'type' => 'Base Kit', 'tags' => ['Military', 'Piston Engine', 'Fighter'], 'addDescription' => 'More information coming soon', 'stock' => 1, 'price' => 14, 'score' => 3, 'image' => 'ACA1662.jpg',
            ],
            [
                'productId' => 'ACA1663', 'scale' => '1:72', 'brand' => 'ACADEMY', 'description' => 'Cessna A-37 B Dragonfly', 'type' => 'Base Kit', 'tags' => ['Military', 'Jet', 'Fighter'], 'addDescription' => 'More information coming soon', 'stock' => 1, 'price' => 15, 'score' => 3, 'image' => 'ACA1663.jpg'
            ]
        ];
        return $this->render('products/itemList.html.twig', ['itemList' => $itemList]);
    // }
    //  #[Route('/insertReview', name:'insertReview')]
    // public function insertReview(EntityManagerInterface $doctrine)
    // {

    }
}
