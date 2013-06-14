<?php

namespace OBJ;

/**
 * @Entity @Table(name="recipeingredient")
 **/
class RecipeIngredient
{
    //
    // Private variable setup
    //


    /** @Id @Column(name="recipeIngredientId",type="integer") @GeneratedValue **/
    protected $recipeIngredientId;

    /** @Column(type="integer") **/
    protected $recipeId;

    /** @Column(type="integer") **/
    protected $ingredientId;



    //
    // Getters/Setters
    //

    // RecipeIngredientId
    public function getRecipeIngredientId()
    {
        return $this->recipeIngredientId;
    }

    // RecipeId
    public function getRecipeId()
    {
        return $this->recipeId;
    }

    public function setRecipeId($recipeId)
    {
        $this->recipeId = $recipeId;
    }

    // IngredientId
    public function getIngredientId()
    {
        return $this->ingredientId;
    }

    public function setIngredientId($ingredientId)
    {
        $this->ingredientId = $ingredientId;
    }


}


