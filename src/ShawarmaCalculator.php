<?php

declare(strict_types=1);

namespace shawarma;

class ShawarmaCalculator
{
    protected array $titles = [];
    protected array $ingredients = [];
    protected float $cost = 0;

    public function getTitles(): array
    {
        return $this->titles;
    }

    public function setTitles(string $shawarma): void
    {
        if (!in_array($shawarma, $this->getTitles())) {
            $this->titles[] = $shawarma;
        }
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function setIngredients(array $ingredients): void
    {
        $this->ingredients = $ingredients;
    }

    public function getCost(): int|float
    {
        return $this->cost;
    }

    public function setCost(float|int $cost): void
    {
        $this->cost = $cost;
    }

    public function sum (float $cost)
    {
        $this->setCost($this->getCost() + $cost);
    }

    public function add(Shawarma $shawarma)
    {
        $this->setTitles($shawarma->getTitle());
        $this->sum($shawarma->getCost());
        $this->ingredients[] = $shawarma->getIngredients();
    }

    public function ingredients(): array
    {
        return array_unique(array_merge(...$this->ingredients));
    }
}