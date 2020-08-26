<?php
namespace src\model;

require_once 'DB.php';

class EmployeurModel{

    private $db;

    public  function __construct()
    {
          $this->db =  new DB;
    }

    public function addEmployeur(Employeur $emp)
    {
     
        return $this->db->executeInsert($sql);

    }

}
