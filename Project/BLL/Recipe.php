<?php

/**
 * Description of Recipe
 *
 * @author Atrimeloni
 * *uri /recipe
 */
class Recipe extends Tonic\Resource  {  


    public function GetRecipes()
    {
        
    }
    
    public function GetRecipe($RecipeId)
    {
        $recipeDAL = new DAL\Recipe();
        $recipe = $recipeDAL->GetRecipeByRecipeId($RecipeId);
        
        return $recipe;
    }
    
    
    public function CreateRecipe()
    {
        
    }
    
    public function UpdateRecipe()
    {
        // translate the jso into the object
        
    }
    
    public function DeleteRecipe()
    {
        
    }
    
    
}
    
    
    
