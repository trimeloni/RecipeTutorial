<?php

//include_once("APIBase.php");

//namespace BLL;

/**
 * Description of Recipe
 *
 * @author Atrimeloni
 * @uri /recipe
 */
class Recipe extends Tonic\Resource  {  
//class Recipe extends APIBase {
     /**
     * @method CUSTOM
     */
    function exampleMethod() {
	return 'Hello (CUSTOM) World ';
    }
    
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
