<?php


/**
 * @Entity @Table(name="review")
 **/
class Review
{
    //
    // Private variable setup
    //


    /** @Id @Column(name="reviewId",type="integer") @GeneratedValue **/
    protected $reviewId;

    /** @Column(type="integer") **/
    protected $recipeId;

    /** @Column(type="string") **/
    protected $review;



    //
    // Getters/Setters
    //

    // ReviewId
    public function getReviewId()
    {
        return $this->reviewId;
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


    // Name
    public function getReview()
    {
        return $this->review;
    }

    public function setReview($review)
    {
        $this->review = $review;
    }


}


