<?php
namespace src\model;

class CompteModel extends DB{


    public  function __construct()
    {  
            parent::__construct();

    }

    public function addCompte($compte)
    {
        if($this->db != null)
		{  
             $this->db->persist($compte);
             $this->db->flush();

             return $compte->getId();
        }
    }
    public function getCompteByName($compte)
    {
        if($this->db != null)
		{
	    	return $this->db->createQuery("SELECT t FROM TypeCompte t WHERE t.libelle = '$compte'")->getSingleResult();
        }
    }
    public function getCientByName($client)
    {
        if($this->db != null)
		{
	    	return $this->db->createQuery("SELECT t FROM TypeClient t WHERE t.libelle = '$client'")->getSingleResult();
        }
    }
    public function getClient($client)
    {
        if($this->db != null)
		{
         return $this->db->find('Client',$client);
        }
    }
    public function getEtat($etat)
    {
        if($this->db != null)
		{
         return $this->db->find('Etat',$etat);
        }
    }
    public function listeCompte()
    {
        return $this->db->findAll();
    } 

    public function addClient($client)
    {
        if($this->db != null)
		{
             $this->db->persist($client);
             $this->db->flush();

             return $client->getId();
        }
    }
   


}