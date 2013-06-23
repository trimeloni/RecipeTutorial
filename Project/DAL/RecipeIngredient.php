<?php
// DAL

namespace DAL;

// BootStrap to Doctrine
require_once "DALBase.php";

/**
 * Description of RecipeIngredient
 *
 * @author Atrimeloni
 */
class RecipeIngredient extends DALBase
{
    public function GetRecipeIngredients()
    {
        $repository = $this->entityManager->getRepository('OBJ\RecipeIngredient');
        $objects = $repository->findAll();

        return $objects;
    }
    
    public function GetRecipeIngredientByRecipeIngredientId($recipeIngredientId)
    {
        $object = $this->entityManager->find('OBJ\RecipeIngredient', $recipeIngredientId); // by PK
        return $object;
    }

    public function UpdateRecipeIngredient($recipeIngredient)
    { 
        // get the entry from the database (by id) and merge it to the new values
        $updatedRecipeIngredient = $this->entityManager->merge($recipeIngredient);

        // perform the update to the database
        $this->entityManager->flush();
        
        return $updatedRecipeIngredient;
    }
    
    public function CreateRecipeIngredient($recipeIngredient)
    {
        $this->entityManager->persist($recipeIngredient);
        $this->entityManager->flush();
        
        return $recipeIngredient;
    }
    
    public function DeleteRecipeIngredientByRecipeIngredientId($recipeIngredientId)
    {
        $object = $this->entityManager->find('OBJ\RecipeIngredient', $recipeIngredientId); // by PK
        $this->entityManager->remove($object);
        $this->entityManager->flush();
        
        return;
    }
    
    
    
}
    
