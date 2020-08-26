<?php
namespace src\model;
class ClientModel extends DB{

    public  function __construct()
    {  
        parent::__construct();
    }

    public function addClient(Client $client)
    {
        if($this->db != null)
		{
             $this->db->persist($client);
             $this->db->flush();

             return $client->getId();
        }
    }
    public function find($client)
    {
        if($this->db != null)
		{
         return $this->db->find('Client',$client);
        }
    }

    public function typeclient($type)
    {  
    
        if($this->db != null)
		{
             $this->db->persist($type);
             $this->db->flush();

             return $client->getId();
        }
    }

    public function getCient($client)
    {

        $sql = "SELECT idC FROM `client` WHERE idC = '$client' ";
        return $this->db->executeSelect($sql);
    }

    public function getCientByName($client)
    {
        if($this->db != null)
		{
	     	return $this->db->createQuery("SELECT c FROM TypeClient c WHERE c.libelle = " . $client)->getSingleResult();
        }
    }

    public function getLastClient()
    {
    
        $sql = "SELECT max(idC) FROM  `client`";
        return $this->db->executeSelect($sql);
    }

    public function getAllTypeCient(){

        $sql = "SELECT * FROM typeclient";
        return $this->db->executeSelect($sql);
    }

}

?>