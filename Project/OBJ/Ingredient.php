<?php


/**
 * @Entity @Table(name="ingredient")
 **/
class Ingredient
{
    //
    // Private variable setup
    //


    /** @Id @Column(name="ingredientId",type="integer") @GeneratedValue **/
    protected $ingredientId;

    /** @Column(type="string") **/
    protected $name;



    //
    // Getters/Setters
    //

    // Id
    public function getIngredientId()
    {
        return $this->ingredientId;
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


}


