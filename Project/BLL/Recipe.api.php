<?php

//use DAL;

#echo ""
//require_once __DIR__."/../vendor/autoload.php";
//require_once "../vendor/autoload.php";

/**
 * Description of Recipe
 *
 * @author Atrimeloni
 * @uri /recipe
 */
class Recipe extends Tonic\Resource  {  

     /**
     * @method CUSTOM
     * @provides text/html
     */
    function exampleMethod() {
	return 'Hello (CUSTOM) World ';
    }
    
    /**
     * @method GET
     * @provides text/html
     */
    public function GetRecipes()
    {
        
        echo "\nin get recipes";
        //echo "\n". __DIR__ . "/../vendor/autoload.php";
        
        //try
        //{
        $recipeDAL = new DAL\Recipe();
        //$recipe = $recipeDAL->GetRecipes();
        $recipe = $recipeDAL->GetRecipeByRecipeId(1);
        //}
        //catch (Exception $e)
        //{
        //    echo "exception";
        //    print_r($e);
        //}
        //*/
        //echo "exiting get recipes";
        
        //return "Hello GetRecipes";
        //return json_encode($recipe);
        return $recipe->JSonEncode();
            
        //echo "1";
        //$recipeDAL = new DAL\Recipe();
        //echo "2";
        //$recipe = $recipeDAL->GetRecipes();
        //echo "2";
        //return $recipe;
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
    
    
?>    
