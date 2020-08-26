<?php
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
 * @Entity 
 * @Table(name="clients")
**/
class Client{

        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /** @Column(type="string") **/
        private $email;

        /** @Column(type="string") **/
        private $adresse;

        /** @Column(type="integer") **/
        private $telephone;

        /** @Column(type="string") **/
        private $nom;

        /** @Column(type="string") **/
        private $prenom;

        /** @Column(type="decimal") **/
        private $salaire;
        
        /** @Column(type="string") **/
        private $nomEntreprise;

        /**
         * Many clients have one employeur. This is the owning side.
         * @ManyToOne(targetEntity="Employeur", inversedBy="clients")
         * @JoinColumn(name="employeur_id", referencedColumnName="id")
         */
        private $employeur;
    
         /**
         * Many client have one typeclient. This is the owning side.
         * @ManyToOne(targetEntity="TypeClient", inversedBy="clients")
         * @JoinColumn(name="type_client_id", referencedColumnName="id")
         */
        private $typeClient;
        /**
         * One client has many comptes. This is the inverse side.
         * @OneToMany(targetEntity="Compte", mappedBy="proprietaire")
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


                public function getEmail(){
                            return $this->email;
                }

                public function setEmail($email){
                            $this->email = $email;
                }

                public function getAdresse(){
                            return $this->adresse;
                }

                public function setAdresse($adresse){
                            $this->adresse = $adresse;
                }

                public function getTelephone(){
                            return $this->telephone;
                }

                public function setTelephone($telephone){
                            $this->telephone = $telephone;
                }

                public function getNom(){
                            return $this->nom;
                }

                public function setNom($nom){
                            $this->nom = $nom;
                }

                public function getPrenom(){
                            return $this->prenom;
                }

                public function setPrenom($prenom){
                            $this->prenom = $prenom;
                }

                public function getSalaire(){
                            return $this->salaire;
                }

                public function setSalaire($salaire){
                            $this->salaire = $salaire;
                }

                public function getEmployeur(){
                            return $this->employeur;
                }

                public function setEmployeur($employeur){
                            $this->employeur = $employeur;
                }

                public function getNomEntreprise(){
                            return $this->nomEntreprise;
                }

                public function setNomEntreprise($nomEntreprise){
                            $this->nomEntreprise = $nomEntreprise;
                } 
                public function getTypeClient(){
                    return $this->typeClient;
                }
            
                public function setTypeClient($typeClient){
                    $this->typeClient = $typeClient;
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