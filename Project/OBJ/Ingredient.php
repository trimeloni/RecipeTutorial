<?php

namespace OBJ;

/**
 * @Entity @Table(name="ingredient")
 **/
class Ingredient
{
    /** @Id @Column(name="ingredientId",type="integer") @GeneratedValue **/
    public $ingredientId;

    /** @Column(type="string") **/
    public $name;

}


