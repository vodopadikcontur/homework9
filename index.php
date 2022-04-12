<?php

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

class ShawarmaOdeskaya extends Shawarma
{
    protected string $title = 'Шаурма Одесская';
    protected float $cost = 69;
    protected array $ingredients = ['огурцы маринованные', 'картофель жареный', 'чесночный соус', 'тандырный лаваш', 'маринованный лук с барбарисом и зеленью', 'мясо куриное', 'салат коул слоу', 'корейская морковь'];
}

class ShawarmaGovyazhaya extends Shawarma
{
    protected string $title = 'Шаурма говяжья';
    protected float $cost = 75;
    protected array $ingredients = ['чесночный соус', 'говяжий окорок', 'огурцы маринованные', 'маринованный лук с барбарисом и зеленью', 'салат коул слоу, тандырный лаваш', 'помидоры свежие', 'хумус', 'соус тахин'];
}

class ShawarmaBaranina extends Shawarma
{
    protected string $title = 'Шаурма из Баранины';
    protected float $cost = 85;
    protected array $ingredients = ['острый соус', 'огурцы маринованные', 'кинза', 'помидоры свежие', 'маринованный лук с барбарисом и зеленью', 'мясо баранины', 'лаваш арабский'];
}

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
