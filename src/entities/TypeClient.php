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
 * @Entity @Table(name="typeclients")
**/
class TypeClient
{

        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /** @Column(type="string") **/
        private $libelle;

        /**
         * One typeclient has many client. This is the inverse side.
         * @OneToMany(targetEntity="Client", mappedBy="typeClient")
         */
        private $clients;

        public function __construct()
        {
            $this->clients = new ArrayCollection();
        
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

        public function getClients()
        {
            return $this->clients;
        }
            
        public function setComptes($clients)
        {
            $this->clients = $clients;
        }
        
}

?>