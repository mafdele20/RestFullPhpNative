<?php
require_once 'config/Autoloader.php';
use src\model\OperationModel;

 class Operations
 {
    public function getAllOperations()
    {
        $opModel = new OperationModel;
        $opModel->findAll();
    }

    public function getSolde()
    {
        if(isset($_GET['numero']))
        {
      
            extract($_GET);
            $opModel = new OperationModel;
            $opModel->getSolde($numero);
      
        }
    }

    public function getOperaionByNum()
    {
        if(isset($_GET['numero']))
        {

            extract($_GET);
            $opModel = new OperationModel;
            $opModel->getOperationByNum($numero);
         

        }
    }
 }