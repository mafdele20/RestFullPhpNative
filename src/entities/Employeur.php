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
 * @Entity @Table(name="employeurs")
**/
class Employeur
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $nomEmployeur;

    /** @Column(type="string") **/
    private $raisonSociale;

    /** @Column(type="integer") **/
    private $cni;

    /**
     * One employeur has many clients. This is the inverse side.
     * @OneToMany(targetEntity="Client", mappedBy="employeur")
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
        public function getNomEmployeur()
        {
               return $this->nomEmployeur;
        }

        public function setNomEmployeur($nomEmployeur)
        {
                $this->nomEmployeur = $nomEmployeur;
        }

        public function getRaisonSociale()
        {
                return $this->raisonSociale;
        }

        public function setRaisonSociale($raisonSociale)
        {
                $this->raisonSociale = $raisonSociale;
        }

        public function getCni()
        {
                return $this->cni;
        }

        public function setCni($cni)
        {
                $this->cni = $cni;
        }
        
        public function getClients()
        {
		return $this->clients;
	}

        public function setClients($clients)
        {
		$this->clients = $clients;
	}
}

?>