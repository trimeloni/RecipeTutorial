<?php

require_once "../vendor/autoload.php";

// Recipe DAL Object
$recipeDAL = new DAL\Recipe();


// ----------------------------------------------------------------

echo "\n\n/**** Testing CreateRecipe ****/\n";

print "\nBegin:" . strftime('%c') . "\n\n";
$newRecipe = new OBJ\Recipe();
$newRecipe->setName("Tester");
$newRecipe->setCookTime(1);
$newRecipe->setPrepTime(2);
$newRecipe = $recipeDAL->CreateRecipe($newRecipe);
print_r($newRecipe);
print "\nEnd:" . strftime('%c') . "\n\n";


// ----------------------------------------------------------------

echo "\n\n/**** Testing GET ALL  ****/\n";

print "\nBegin:" . strftime('%c') . "\n\n";
$recipe = $recipeDAL->GetRecipes();
print_r($recipe);
print "\nEnd:" . strftime('%c') . "\n\n";


// ----------------------------------------------------------------

echo "\n\n/**** Testing UPDATE  ****/\n";

print "\nBegin:" . strftime('%c') . "\n\n";
$newRecipe->setName("Updated Name");
$newRecipe->setCookTime(12);
$updatedRecipe = $recipeDAL->UpdateRecipe($newRecipe);
print_r($updatedRecipe);
$recipe = $recipeDAL->GetRecipes();
print_r($recipe);
print "\nEnd:" . strftime('%c') . "\n\n";


// ----------------------------------------------------------------

echo "\n\n/**** Testing GetByRecipeId (ID=2) ****/\n";

print "\nBegin:" . strftime('%c') . "\n\n";
$recipe = $recipeDAL->GetRecipeByRecipeId(2);
print_r($recipe);
print "\nEnd:" . strftime('%c') . "\n\n";


// ----------------------------------------------------------------

echo "\n\n/**** Testing DeleteRecipe By Id ****/\n";

print "\nBegin:" . strftime('%c') . "\n\n";
$recipe = $recipeDAL->DeleteRecipeByRecipeId($newRecipe->getRecipeId());
$recipe = $recipeDAL->GetRecipes();
print_r($recipe);
print "\nEnd:" . strftime('%c') . "\n\n";



