<?php
// DAL

namespace DAL;

// BootStrap to Doctrine
require_once "DALBase.php";

/**
 * Description of Review
 *
 * @author Atrimeloni
 */
class Review extends DALBase
{
    public function GetReviews()
    {
        $repository = $this->entityManager->getRepository('OBJ\Review');
        $objects = $repository->findAll();

        return $objects;
    }
    
    public function GetReviewByReviewId($reviewId)
    {
        $object = $this->entityManager->find('OBJ\Review', $reviewId); // by PK
        return $object;
    }

    public function UpdateReview($review)
    { 
        // get the entry from the database (by id) and merge it to the new values
        $updatedReview = $this->entityManager->merge($review);

        // perform the update to the database
        $this->entityManager->flush();
        
        return $updatedReview;
    }
    
    public function CreateReview($review)
    {
        $this->entityManager->persist($review);
        $this->entityManager->flush();
        
        return $review;
    }
    
    public function DeleteReviewByReviewId($reviewId)
    {
        $object = $this->entityManager->find('OBJ\Review', $reviewId); // by PK
        $this->entityManager->remove($object);
        $this->entityManager->flush();
        
        return;
    }
    
    
    
}
    
