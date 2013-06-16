<?php
// DAL

namespace DAL;

// BootStrap to Doctrine
require_once "DALBase.php";

/**
 * Description of Recipe
 *
 * @author Atrimeloni
 */
class Recipe extends DALBase
{
    public function GetRecipes()
    {
        $repository = $this->entityManager->getRepository('OBJ\Recipe');
        $objects = $repository->findAll();

        return $objects;
    }
    
    public function GetRecipeByRecipeId($recipeId)
    {
        $object = $this->entityManager->find('OBJ\Recipe', $recipeId); // by PK
        return $object;
    }

    public function UpdateRecipe($recipe)
    { 
        // get the entry from the database (by id) and merge it to the new values
        $updatedRecipe = $this->entityManager->merge($recipe);

        // perform the update to the database
        $this->entityManager->flush();
        
        return $updatedRecipe;
    }
    
    public function CreateRecipe($recipe)
    {
        $this->entityManager->persist($recipe);
        $this->entityManager->flush();
        
        return $recipe;
    }
    
    public function DeleteRecipeByRecipeId($recipeId)
    {
        $object = $this->entityManager->find('OBJ\Recipe', $recipeId); // by PK
        $this->entityManager->remove($object);
        $this->entityManager->flush();
        
        return;
    }
    
    
    
}
    
