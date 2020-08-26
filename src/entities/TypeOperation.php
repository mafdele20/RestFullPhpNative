<?php
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\GeneratedValue;



/**
 * @Entity @Table(name="typeOperation")
**/
class TypeOperation
{

        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /** @Column(type="string") **/
        private $libelle;

        /**
         * One typeoperation has many operation. This is the inverse side.
         * @OneToMany(targetEntity="Operation", mappedBy="typeOperation")
         */
        private $operations;

        public function __construct()
        {
           $this->operations = new ArrayCollection();
    
        }
    
        public function getId()
        {
                return $this->id;
        }
    
        public function setId($id){
                $this->id = $id;
        }
        public function getLibelle()
        {
            return $this->libelle;
        }

        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;
        }

        public function getOperations()
        {
            return $this->operations;
        }
            
        public function setOperations($operations)
        {
            $this->operations = $operations;
        }
        
}

?>