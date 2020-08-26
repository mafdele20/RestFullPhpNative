<?php
namespace src\model;

class SearchModel{

    
    private $db;

    public  function __construct()
    {
          $this->db =  new DB;
    }
    
    public function searchClient($id){

        return $this->db->find($id);

    }

    

}
   

?>