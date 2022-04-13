<?php

declare(strict_types=1);

namespace shawarma;

class Shawarma
{
    protected string $title;
    protected float $cost;
    protected array $ingredients;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

}
