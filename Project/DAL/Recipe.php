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
        $this->entityManager->persist($recipe);
        $this->entityManager->flush();
        
        return $recipe;
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
    
