<?php
// DAL

namespace DAL;

// BootStrap to Doctrine
require_once "DALBase.php";

/**
 * Description of Ingredient
 *
 * @author Atrimeloni
 */
class Ingredient extends DALBase
{
    public function GetIngredients()
    {
        $repository = $this->entityManager->getRepository('OBJ\Ingredient');
        $objects = $repository->findAll();

        return $objects;
    }
    
    public function GetIngredientByIngredientId($ingredientId)
    {
        $object = $this->entityManager->find('OBJ\Ingredient', $ingredientId); // by PK
        return $object;
    }

    public function UpdateIngredient($ingredient)
    { 
        // get the entry from the database (by id) and merge it to the new values
        $updatedIngredient = $this->entityManager->merge($ingredient);

        // perform the update to the database
        $this->entityManager->flush();
        
        return $updatedIngredient;
    }
    
    public function CreateIngredient($ingredient)
    {
        $this->entityManager->persist($ingredient);
        $this->entityManager->flush();
        
        return $ingredient;
    }
    
    public function DeleteIngredientByIngredientId($ingredientId)
    {
        $object = $this->entityManager->find('OBJ\Ingredient', $ingredientId); // by PK
        $this->entityManager->remove($object);
        $this->entityManager->flush();
        
        return;
    }
    
    
    
}
    
