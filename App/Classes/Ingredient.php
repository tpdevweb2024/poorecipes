<?php

namespace App\Classes;

class Ingredient
{
    public $name;
    public $quantity;
    public $unit;

    public function __construct(string $name, int|float $quantity, string $unit)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->unit = $unit;
    }
}
