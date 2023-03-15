<?php

namespace App\Entity;

use App\Repository\ConsumerReviewRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsumerReviewRepository::class)]
class ConsumerReview
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $productId = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $cons_review = null;

    #[ORM\Column(nullable: true)]
    private ?int $cons_score = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getConsReview(): ?string
    {
        return $this->cons_review;
    }

    public function setConsReview(?string $cons_review): self
    {
        $this->cons_review = $cons_review;

        return $this;
    }

    public function getConsScore(): ?int
    {
        return $this->cons_score;
    }

    public function setConsScore(?int $cons_score): self
    {
        $this->cons_score = $cons_score;

        return $this;
    }
}
