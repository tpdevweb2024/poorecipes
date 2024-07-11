<?php

namespace App\Classes;

use App\Classes\Ingredient;

class Recipe
{
    // - Méthodes : constructeur, ajout d'ingrédient, ajout d'instruction, définition des temps, obtention des informations
    public $name;
    public $ingredients = [];
    public $instructions = [];
    public $prepTime;
    public $cookingTime;
    public $level;
    public $servings;

    public function __construct(string $name, int $prepTime, int $cookingTime, int $level, int $servings)
    {
        $this->name = $name;
        $this->prepTime = $prepTime;
        $this->cookingTime = $cookingTime;
        $this->level = $level;
        $this->servings = $servings;
    }

    public function addIngredient(Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;
    }

    public function addInstruction(string $instruction)
    {
        $this->instructions[] = $instruction;
    }

    public function setPrepTime(int $time)
    {
        $this->prepTime = $time;
    }

    public function setCookingTime(int $time)
    {
        $this->cookingTime = $time;
    }

    public function getInformations(): array
    {
        return [
            "name"          => $this->name,
            "prepTime"      => $this->prepTime,
            "cookingTime"   => $this->cookingTime,
            "level"         => $this->level,
            "servings"      => $this->servings,
            "instructions"  => $this->instructions,
            "ingredients"   => $this->ingredients
        ];
    }
}
