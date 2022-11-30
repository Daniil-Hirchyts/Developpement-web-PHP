<?php

class Voiture
{

    private $immatriculation;
    private $marque;
    private $couleur;
    private $nbSieges; // Nombre de places assises

    // un getter

    public function __construct(
        $immatriculation,
        $marque,
        $couleur,
        $nbSieges
    )
    {
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->nbSieges = $nbSieges;
    }

    public function __toString()
    {
        return $this->immatriculation . ' de marque ' . $this->marque . ' (couleur ' . $this->couleur . ', ' . $this->nbSieges . ') ';
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    public function setImmatriculation($immatriculation): void
    {
        $this->immatriculation = substr($immatriculation, 0, 8);
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    public function getNbSieges()
    {
        return $this->nbSieges;
    }

    public function setNbSieges($nbSieges): void
    {
        $this->nbSieges = $nbSieges;
    }
}

?>

