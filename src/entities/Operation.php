<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity @Table(name="Operations")
**/
class Operation{

        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /** @Column(type="datetime") **/
        private $dateOperation;

        /** @Column(type="string") **/
        private $recu;

        /** @Column(type="decimal") **/
        private $montant;
        
        /** @Column(type="decimal") **/
        private $taxe;
         
        /**
         * Many operations have one typeoperation. This is the owning side.
         * @ManyToOne(targetEntity="TypeOperation", inversedBy="operations")
         * @JoinColumn(name="type_operation_id", referencedColumnName="id")
         */
        private $typeOperation;

        /**
         * Many operations have one comptes. This is the owning side.
         * @ManyToOne(targetEntity="Compte", inversedBy="operations")
         * @JoinColumn(name="compte_id", referencedColumnName="id")
         */
        private $compte;

        public function __construct()
        {
        
        }

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getDateOperation(){
            return $this->dateOperation;
        }
    
        public function setDateOperation($dateOperation){
            $this->dateOperation = $dateOperation;
        }
    
        public function getRecu(){
            return $this->recu;
        }
    
        public function setRecu($recu){
            $this->recu = $recu;
        }
    
        public function getMontant(){
            return $this->montant;
        }
    
        public function setMontant($montant){
            $this->montant = $montant;
        }
    
        public function getTaxe(){
            return $this->taxe;
        }
    
        public function setTaxe($taxe){
            $this->taxe = $taxe;
        }
    
        public function getTypeOperation(){
            return $this->typeOperation;
        }
    
        public function setTypeOperation($typeOperation){
            $this->typeOperation = $typeOperation;
        }
    
        public function getCompte(){
            return $this->compte;
        }
    
        public function setCompte($compte){
            $this->compte = $compte;
        }
    }



?>