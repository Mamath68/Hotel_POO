<?php

class Reservation
{
    private $nbChambreRes;
    private $nbChambreDispo;

    public function __construct($nbChambreRes, $nbChambreDispo)
    {
        $this->nbChambreRes = $nbChambreRes;
        $this->nbChambreDispo = $nbChambreDispo;
    }

}
class Client extends Reservation
{
    private $prenom;
    private $nom;

    public function __construct($prenom, $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

}