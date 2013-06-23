<?php

include_once("APIBase.php");


/**
 * Work with the collection of recipeIngredients
 *
 * @author Atrimeloni
 * @uri /recipeIngredient
 */
class RecipeIngredient extends APIBase  {  
    /**
     * @method GET
     */
    public function GetRecipeIngredients()
    {
        
        $recipeIngredientDAL = new DAL\RecipeIngredient();
        $recipeIngredient = $recipeIngredientDAL->GetRecipeIngredients();

        //return $recipeIngredient;
        //return json_encode($recipeIngredient);
        return new Tonic\Response(Tonic\Response::OK,$recipeIngredient,array('content-type'=>'application/json'));
    }

    /**
     * @method POST
     * @json
     */
    public function AddRecipeIngredient()
    {        
        $mapper = new Adminomatic\AutoMapper\Mapper();
        $recipeIngredientObject = $mapper->Map(new OBJ\RecipeIngredient(),$this->request->data );
        
        $recipeIngredientDAL = new DAL\RecipeIngredient();        
        $newRecipeIngredient = $recipeIngredientDAL->CreateRecipeIngredient($recipeIngredientObject);

        return new Tonic\Response(Tonic\Response::CREATED,$newRecipeIngredient,array('content-type'=>'application/json'));
    }
    
    /**
     * @method PUT
     * @json
     */
    public function UpdateRecipeIngredient()
    {
        $mapper = new \Adminomatic\AutoMapper\Mapper();
        $recipeIngredientObject = $mapper->Map(new OBJ\RecipeIngredient(),$this->request->data );

        $recipeIngredientDAL = new DAL\RecipeIngredient();
        $updatedRecipeIngredient = $recipeIngredientDAL->UpdateRecipeIngredient($recipeIngredientObject);
        
        return new Tonic\Response(Tonic\Response::ACCEPTED,$updatedRecipeIngredient,array('content-type'=>'application/json'));
        
    }
}



/**
 * Work with an individual RecipeIngredient
 *
 * @author Atrimeloni
 * @uri /recipeIngredient/{recipeIngredientId}
 */
class RecipeIngredients extends APIBase  {  
    /**
     * @param integer $recipeIngredientId
     * @return \Tonic\Response
     * @method GET
     */
    public function GetRecipeIngredient($recipeIngredientId)
    {
        $recipeIngredientDAL = new DAL\RecipeIngredient();
        $recipeIngredient = $recipeIngredientDAL->GetRecipeIngredientByRecipeIngredientId($recipeIngredientId);
        
        //return $recipeIngredient;
        return new Tonic\Response(Tonic\Response::OK,$recipeIngredient,array('content-type'=>'application/json'));
    }
    
    /**
     * @param integer $recipeIngredientId
     * @return \Tonic\Response
     * @method DELETE
     */
    public function DeleteRecipeIngredient($recipeIngredientId)
    {
        $recipeIngredientDAL = new DAL\RecipeIngredient();
        $recipeIngredient = $recipeIngredientDAL->DeleteRecipeIngredientByRecipeIngredientId($recipeIngredientId);
        
        //return $recipeIngredient;
        return new Tonic\Response(Tonic\Response::OK,"OK");
    }
    
    
}




