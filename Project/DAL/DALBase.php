<?php
namespace DAL;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// autoload the name spaces for doctrine
//require_once "../vendor/autoload.php";
include_once __DIR__."/../vendor/autoload.php";


/**
 * Description of LocalDoctrineBase
 *
 * @author Atrimeloni
 */
class DALBase {
    
   public $entityManager;
   
   function __construct() {

       // Create a simple "default" Doctrine ORM configuration for Annotations
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."../OBJ"), $isDevMode);


        // database configuration parameters
        $conn = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => 'root',
            'host' => 'localhost',
            'port' => '3306',
            'dbname' => 'recipe',

        );

        // obtaining the entity manager
        $this->entityManager = EntityManager::create($conn, $config);

   }
}


