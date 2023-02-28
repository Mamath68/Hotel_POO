<?php

class Hotel
{
    private $nameHotel;
    private $adresse;
    private $Zipcode;
    private $city;
    private $bedroom;
    private $reservations;


    public function __construct($nameHotel, $nom, $adresse, $nbChambres, $nbChambreRes, $nbChambreDispo)
    {
        $this->nameHotel = $nameHotel;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nbChambres = $nbChambres;
        $this->nbChambreRes = $nbChambreRes;
        $this->nbChambreDispo = $nbChambreDispo;

    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getNbChambres()
    {
        return $this->nbChambres;
    }
    public function getNbChambreRes()
    {
        return $this->nbChambreRes;
    }
    public function getNbChambreDispo()
    {
        return $this->nbChambreDispo;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function setNbChambres($nbChambres)
    {
        $this->nbChambres = $nbChambres;
    }
    public function setNbChambreRes($nbChambreRes)
    {
        $this->nbChambreRes = $nbChambreRes;
    }
    public function setNbChambreDispo($nbChambreDispo)
    {
        $this->nbChambreDispo = $nbChambreDispo;
    }

    public function __toString(){
        
    }
}