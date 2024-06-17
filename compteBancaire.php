<?php

class CompteBancaire {
    private string $libelle;
    private int $soldeInitial;
    private string $devise;
    private $titulaire;

    public function __construct($libelle, $soldeInitial, $devise, $titulaire) {
        $this->libelle = $libelle;
        $this->soldeInitial = $soldeInitial;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
    }

    public function crediter($montant) {
        $this->soldeInitial += $montant;
    }

    public function debiter($montant) {
        $this->soldeInitial -= $montant;
    }

    public function effectuerVirement($montant, $compteDestinataire) {
        $this->debiter($montant);
        $compteDestinataire->crediter($montant);
    }

    public function afficherInformations() {
        return "{$this->libelle} : {$this->soldeInitial} {$this->devise}<br><br>";
    }

    // GET

    public function getLibelle() {
        return $this->libelle;
    }

    public function getSoldeInitial() {
        return $this->soldeInitial;
    }

    public function getDevise() {
        return $this->devise;
    }

    public function getTitulaire() {
        return $this->titulaire;
    }

    // SET

    public function setLibelle() {
        $this->libelle;
    }
          
    public function setSoldeInitial() {
        $this->soldeInitial;
    }
          
    public function setDevise() {
        $this->devise;
    }
          
    public function setTitulaire() {
        $this->titulaire;
    }
}
