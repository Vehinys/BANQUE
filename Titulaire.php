<?php

class Titulaire {
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $ville;
    private $comptesBancaires;

    public function __construct($nom, $prenom, $dateNaissance, $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->ville = $ville;
        $this->comptesBancaires = [];
    }

    public function ajouterCompte($compte) {
        $this->comptesBancaires[] = $compte;
    }

    private function calculerAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();
        $age = $aujourdhui->diff($dateNaissance);
        return $age->y;
    }

    public function afficherInformations() {
        $infos = "{$this->nom} {$this->prenom} née le {$this->dateNaissance} à {$this->ville}, la personne à {$this->calculerAge()} ans :<br><br>";
        $infos .= "Comptes bancaires :<br><br>";
        foreach ($this->comptesBancaires as $compte) {
            $infos .= "- " . $compte->afficherInformations();
        }
        return $infos;
    }

    // GET
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getComptesBancaires() {
        return $this->comptesBancaires;
    }

    // SET

    public function setNom(){
        $this->nom;
      }
      
      public function setPrenom(){
        $this->prenom;
      }
      
      public function setDateNaissance(){
        $this->dateNaissance;
      }
      
      public function setVille(){
        $this->ville;
      }
      
      public function setComptesBancaires(){
        $this->comptesBancaires;
      }
}