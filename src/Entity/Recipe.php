<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecipeRepository::class)]
class Recipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $preparationTime = null;

    #[ORM\Column(nullable: true)]
    private ?int $cookingTime = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $recipeImgPath = null;

    #[ORM\Column(nullable: true)]
    private ?int $originalRecipeId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPreparationTime(): ?int
    {
        return $this->preparationTime;
    }

    public function setPreparationTime(int $preparationTime): static
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    public function getCookingTime(): ?int
    {
        return $this->cookingTime;
    }

    public function setCookingTime(?int $cookingTime): static
    {
        $this->cookingTime = $cookingTime;

        return $this;
    }

    public function getRecipeImgPath(): ?string
    {
        return $this->recipeImgPath;
    }

    public function setRecipeImgPath(?string $recipeImgPath): static
    {
        $this->recipeImgPath = $recipeImgPath;

        return $this;
    }

    public function getOriginalRecipeId(): ?int
    {
        return $this->originalRecipeId;
    }

    public function setOriginalRecipeId(?int $originalRecipeId): static
    {
        $this->originalRecipeId = $originalRecipeId;

        return $this;
    }
}
