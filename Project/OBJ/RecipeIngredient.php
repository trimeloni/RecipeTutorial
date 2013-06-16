<?php

namespace OBJ;

/**
 * @Entity @Table(name="recipeingredient")
 **/
class RecipeIngredient
{
    /** @Id @Column(name="recipeIngredientId",type="integer") @GeneratedValue **/
    public $recipeIngredientId;

    /** @Column(type="integer") **/
    public $recipeId;

    /** @Column(type="integer") **/
    public $ingredientId;

}


