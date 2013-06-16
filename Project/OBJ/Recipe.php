<?php

namespace OBJ;

/**
 * @Entity @Table(name="recipe")
 **/
class Recipe
{
    /** @Id @Column(name="recipeId",type="integer") @GeneratedValue **/
    public $recipeId;

    /** @Column(type="string") **/
    public $name;

    /** @Column(type="integer") **/
    public $prepTime;

    /** @Column(type="integer") **/
    public $cookTime;


    public function JSonEncode()
    {
        return json_encode($this);
    }
/*
    //
    // Getters/Setters
    //

    // Id
    public function getRecipeId()
    {
        return $this->recipeId;
    }

    // Name
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // PrepTime
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    public function setPrepTime($time)
    {
        $this->prepTime = $time;
    }

    // CookTime
    public function getCookTime()
    {
        return $this->cookTime;
    }

    public function setCookTime($time)
    {
        $this->cookTime = $time;
    }
*/

}


