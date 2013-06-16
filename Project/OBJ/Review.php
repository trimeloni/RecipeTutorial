<?php

namespace OBJ;

/**
 * @Entity @Table(name="review")
 **/
class Review
{
    /** @Id @Column(name="reviewId",type="integer") @GeneratedValue **/
    public $reviewId;

    /** @Column(type="integer") **/
    public $recipeId;

    /** @Column(type="string") **/
    public $review;

}


