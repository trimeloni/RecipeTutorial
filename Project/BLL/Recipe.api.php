<?php

include_once("APIBase.php");


/**
 * Work with the collection of recipes
 *
 * @author Atrimeloni
 * @uri /recipe
 */
class Recipe extends APIBase  {  
    /**
     * @method GET
     */
    public function GetRecipes()
    {
        
        $recipeDAL = new DAL\Recipe();
        $recipe = $recipeDAL->GetRecipes();

        //return $recipe;
        //return json_encode($recipe);
        return new Tonic\Response(Tonic\Response::OK,$recipe,array('content-type'=>'application/json'));
    }

    /**
     * @method POST
     */
    public function AddRecipe()
    {
        
    }
    
}



/**
 * Work with an individual Recipe
 *
 * @author Atrimeloni
 * @uri /recipe/{recipeId}
 */
class Recipes extends APIBase  {  
    /**
     * @method GET
     */
    public function GetRecipe($recipeId)
    {
        $recipeDAL = new DAL\Recipe();
        $recipe = $recipeDAL->GetRecipeByRecipeId($recipeId);
        
        //return $recipe;
        return new Tonic\Response(Tonic\Response::OK,$recipe,array('content-type'=>'application/json'));
    }
    
    
    /**
     * @method PUT
     */
    public function UpdateRecipe()
    {
        
        
        
    }
    
    public function DeleteRecipe()
    {
        
    }
    
    
}



    
?>    
