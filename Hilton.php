<?php

class Hilton
{

    private $nom;
    private $adresse;
    private $nbChambre;

    public function __construct($nom, $adresse, $nbChambre)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nbChambre = $nbChambre;
    }

}
