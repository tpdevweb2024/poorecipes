<?php

use App\Classes\Category;
use App\Classes\Recipe;

require "./vendor/autoload.php";

$lasagnes = new Recipe("Lasagnes maison", 30, 60, 4, 14);
$couscous = new Recipe("Couscous à la TP Dev", 45, 25, 3, 8);
$taboule = new Recipe("Taboulé au poulet", 30, 15, 2, 4);

$mainDish = new Category("Plats principaux");
$preDish = new Category("Entrées");

$mainDish->addRecipe($lasagnes);
$mainDish->addRecipe($couscous);
$preDish->addRecipe($taboule);

var_dump($mainDish->getRecipes());
var_dump($preDish->getRecipes());
