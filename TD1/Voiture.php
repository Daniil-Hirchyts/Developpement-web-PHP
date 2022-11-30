<?php

class Voiture
{

    private String $immatriculation;
    private String $marque;
    private String $couleur;
    private int $nbSieges; // Nombre de places assises

    // un getter

    public function __construct(
        String $immatriculation,
        String $marque,
        String $couleur,
        int $nbSieges
    )
    {
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->nbSieges = $nbSieges;
    }

    public function __toString(){
        return $this->immatriculation . ' de marque ' . $this->marque . ' (couleur ' . $this->couleur . ', ' . $this->nbSieges . ') ';
    }

    public function setMarque(String $marque): void {$this->marque = $marque;}
    public function setImmatriculation(String $immatriculation): void {$this->immatriculation = substr($immatriculation, 0, 8);}
    public function setCouleur(String $couleur): void {$this->couleur = $couleur;}
    public function setNbSieges(int $nbSieges): void {$this->nbSieges = $nbSieges;}

    public function getMarque(){return $this->marque;}
    public function getImmatriculation(){return $this->immatriculation;}
    public function getCouleur(){return $this->couleur;}
    public function getNbSieges(){return $this->nbSieges;}

}

?>

