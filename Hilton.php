<?php

class Hilton
{

    protected $nom;
    protected $adresse;
    protected $nbChambre;

    public function __construct($nom, $adresse, $nbChambre)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nbChambre = $nbChambre;
    }

}
