<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;



/**
 * @Entity @Table(name="typecomptes")
**/
class TypeCompte
{

        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /** @Column(type="string") **/
        private $libelle;

        /**
         * One typecompte has many comptes. This is the inverse side.
         * @OneToMany(targetEntity="Compte", mappedBy="typeCompte")
         */
        private $comptes;

        public function __construct()
        {
           $this->comptes = new ArrayCollection();
    
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

        public function getComptes()
        {
            return $this->comptes;
        }
            
        public function setComptes($comptes)
        {
            $this->comptes = $comptes;
        }
        
}

?>