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
     * @json
     */
    public function AddRecipe()
    {        
        $mapper = new Adminomatic\AutoMapper\Mapper();
        $recipeObject = $mapper->Map(new OBJ\Recipe(),$this->request->data );
        
        $recipeDAL = new DAL\Recipe();        
        $newRecipe = $recipeDAL->CreateRecipe($recipeObject);

        return new Tonic\Response(Tonic\Response::CREATED,$newRecipe,array('content-type'=>'application/json'));
    }
    
    /**
     * @method PUT
     * @json
     */
    public function UpdateRecipe()
    {
        $mapper = new \Adminomatic\AutoMapper\Mapper();
        $recipeObject = $mapper->Map(new OBJ\Recipe(),$this->request->data );

        $recipeDAL = new DAL\Recipe();
        $updatedRecipe = $recipeDAL->UpdateRecipe($recipeObject);
        
        return new Tonic\Response(Tonic\Response::ACCEPTED,$updatedRecipe,array('content-type'=>'application/json'));
        
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
     * @param integer $recipeId
     * @return \Tonic\Response
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
     * @param integer $recipeId
     * @return \Tonic\Response
     * @method DELETE
     */
    public function DeleteRecipe($recipeId)
    {
        $recipeDAL = new DAL\Recipe();
        $recipe = $recipeDAL->DeleteRecipeByRecipeId($recipeId);
        
        //return $recipe;
        return new Tonic\Response(Tonic\Response::OK,"OK");
    }
    
    
}




