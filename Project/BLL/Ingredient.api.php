<?php

include_once("APIBase.php");


/**
 * Work with the collection of ingredients
 *
 * @author Atrimeloni
 * @uri /ingredient
 */
class Ingredient extends APIBase  {  
    /**
     * @method GET
     */
    public function GetIngredient()
    {
        
        $ingredientDAL = new DAL\Ingredient();
        $ingredient = $ingredientDAL->GetIngredients();

        return new Tonic\Response(Tonic\Response::OK,$ingredient,array('content-type'=>'application/json'));
    }

    /**
     * @method POST
     * @json
     */
    public function AddIngredient()
    {        
        $mapper = new Adminomatic\AutoMapper\Mapper();
        $ingredientObject = $mapper->Map(new OBJ\Ingredient(),$this->request->data );
        
        $ingredientDAL = new DAL\Ingredient();        
        $newIngredient = $ingredientDAL->CreateIngredient($ingredientObject);

        return new Tonic\Response(Tonic\Response::CREATED,$newIngredient,array('content-type'=>'application/json'));
    }
    
    /**
     * @method PUT
     * @json
     */
    public function UpdateIngredient()
    {
        $mapper = new \Adminomatic\AutoMapper\Mapper();
        $ingredientObject = $mapper->Map(new OBJ\Ingredient(),$this->request->data );

        $ingredientDAL = new DAL\Ingredient();
        $updatedIngredient = $ingredientDAL->UpdateIngredient($ingredientObject);
        
        return new Tonic\Response(Tonic\Response::ACCEPTED,$updatedIngredient,array('content-type'=>'application/json'));
        
    }
}



/**
 * Work with an individual Ingredient
 *
 * @author Atrimeloni
 * @uri /ingredient/{ingredientId}
 */
class Ingredients extends APIBase  {  
    /**
     * @param integer $ingredientId
     * @return \Tonic\Response
     * @method GET
     */
    public function GetIngredient($ingredientId)
    {
        $ingredientDAL = new DAL\Ingredient();
        $ingredient = $ingredientDAL->GetIngredientByIngredientId($ingredientId);
        
        //return $ingredient;
        return new Tonic\Response(Tonic\Response::OK,$ingredient,array('content-type'=>'application/json'));
    }
    
    /**
     * @param integer $ingredientId
     * @return \Tonic\Response
     * @method DELETE
     */
    public function DeleteIngredient($ingredientId)
    {
        $ingredientDAL = new DAL\Ingredient();
        $ingredient = $ingredientDAL->DeleteIngredientByIngredientId($ingredientId);
        
        //return $ingredient;
        return new Tonic\Response(Tonic\Response::OK,"OK");
    }
    
    
}




