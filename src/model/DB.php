<?php
namespace src\model;
 class DB{
    

    protected $db ;

    public function __construct(){
        require_once 'bootstrap.php';
        try 
        {
            $this->db = $entityManager;
        } catch (\PDOException $th) {
            $this->db = null;
        }  
     
    }

  
 }

