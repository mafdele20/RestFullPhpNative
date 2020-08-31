<?php
namespace src\model;

class OperationModel extends DB{


    public  function __construct()
    {  
            parent::__construct();

    }

    public function save($choix)
    {
        if($this->db != null)
		{  
             $this->db->persist($choix);
             $this->db->flush();

             if(!$choix->getId())
             {
             
                return json_encode(['error' => "opération a échoué "]);
             }else
             {
                return json_encode(['success' => "opération effectué avec succes"]);

             }
            
        }
    }
    public function getOperationByNum($num)
    {
        if($this->db != null)
		{
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
            
              $all = $this->db->createQuery("SELECT o.recu, o.montant, o.taxe ,o.dateOperation, c.numero ,t.libelle
              FROM Operation o , Compte c ,TypeOperation t
              WHERE c.numero='".$num."' AND c.id = o.compte  GROUP BY c.id ")->getArrayResult();
             

            if($all)
            {  
                  /*   $i =0;
                    foreach ($all as $value) 
                    {
                        $array = [
                            'id' => $value->getId(),
                            'date' => $value->getDateOperation(),
                            'recu' => $value->getRecu(),
                            'montant' => $value->getMontant(),
                            'taxe' => $value->getTaxe(),
                            'typeOperation' => $value->getTypeOperation()->getLibelle(),
                            'numeroCompte' => $value->getcompte()->getNumero(),
                        ];
                        $data[$i] = $array;
                        $i++; */
            echo json_encode($all);

             }else{
                 $data = 'votre compte n\'a pas d\'operation pour l\'intant';
             echo json_encode($all);

             }
            }else{
                echo 'internal serveur error';
            }          
        }

    public function getSolde($num)
    {
      if($this->db != null)
		{

            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
    
            $all = $this->db->createQuery("SELECT c FROM Compte c  WHERE c.numero =".$num)->getSingleResult();
       
            if($all)
            {
                   $array = [
                       'solde' => $all->getSolde(),
                       'numeroCompte' => $all->getNumero(),
                   ];
                   $data[] = $array;
               
            }else{
                $data = ['error' => 'numéro incorect' ];
            }
             
            echo json_encode($data);
        }
    }

    public function findAll()
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");

         $all = $this->db->getRepository("Operation")->findAll();
      
         if($all)
         {
          
            $i =0;
            foreach ($all as $value) 
            {
                $array = [
                    'id' => $value->getId(),
                    'date' => $value->getDateOperation(),
                    'recu' => $value->getRecu(),
                    'montant' => $value->getMontant(),
                    'taxe' => $value->getTaxe(),
                    'typeOperation' => $value->getTypeOperation()->getLibelle(),
                    'numeroCompte' => $value->getcompte()->getNumero(),
                ];
                $data[$i] = $array;
                $i++;


            } 
         }else{
            $error []= ['error ' => 'pas operation pour l\'instant',]; 
            echo json_encode($error);
            die;
         }
          
            echo json_encode($data);
    } 

  


}