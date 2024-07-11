<?php

namespace App\Classes;

use App\Classes\Recipe;

class Category
{
    public $name;
    public $recipes = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addRecipe(Recipe $recipe)
    {
        $this->recipes[] = $recipe;
    }

    public function getRecipes(): array
    {
        return $this->recipes;
    }
}
