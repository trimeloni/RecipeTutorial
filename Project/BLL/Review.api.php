<?php

include_once("APIBase.php");


/**
 * Work with the collection of reviews
 *
 * @author Atrimeloni
 * @uri /review
 */
class Review extends APIBase  {  
    /**
     * @method GET
     */
    public function GetReviews()
    {
        
        $reviewDAL = new DAL\Review();
        $review = $reviewDAL->GetReviews();

        //return $review;
        //return json_encode($review);
        return new Tonic\Response(Tonic\Response::OK,$review,array('content-type'=>'application/json'));
    }

    /**
     * @method POST
     * @json
     */
    public function AddReview()
    {        
        $mapper = new Adminomatic\AutoMapper\Mapper();
        $reviewObject = $mapper->Map(new OBJ\Review(),$this->request->data );
        
        $reviewDAL = new DAL\Review();        
        $newReview = $reviewDAL->CreateReview($reviewObject);

        return new Tonic\Response(Tonic\Response::CREATED,$newReview,array('content-type'=>'application/json'));
    }
    
    /**
     * @method PUT
     * @json
     */
    public function UpdateReview()
    {
        $mapper = new \Adminomatic\AutoMapper\Mapper();
        $reviewObject = $mapper->Map(new OBJ\Review(),$this->request->data );

        $reviewDAL = new DAL\Review();
        $updatedReview = $reviewDAL->UpdateReview($reviewObject);
        
        return new Tonic\Response(Tonic\Response::ACCEPTED,$updatedReview,array('content-type'=>'application/json'));
        
    }
}



/**
 * Work with an individual Review
 *
 * @author Atrimeloni
 * @uri /review/{reviewId}
 */
class Reviews extends APIBase  {  
    /**
     * @param integer $reviewId
     * @return \Tonic\Response
     * @method GET
     */
    public function GetReview($reviewId)
    {
        $reviewDAL = new DAL\Review();
        $review = $reviewDAL->GetReviewByReviewId($reviewId);
        
        //return $review;
        return new Tonic\Response(Tonic\Response::OK,$review,array('content-type'=>'application/json'));
    }
    
    /**
     * @param integer $reviewId
     * @return \Tonic\Response
     * @method DELETE
     */
    public function DeleteReview($reviewId)
    {
        $reviewDAL = new DAL\Review();
        $review = $reviewDAL->DeleteReviewByReviewId($reviewId);
        
        //return $review;
        return new Tonic\Response(Tonic\Response::OK,"OK");
    }
    
    
}




