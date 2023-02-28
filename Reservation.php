<?php

class Reservation
{
    private Hotel $hotel;
    private Bedroom $bedroom;
    private DateTime $dateDebut;
    private DateTime $dateDeFin;
    private Client $client;


    public function __construct($dateDebut, $dateDeFin)
    {
        $this->dateDebut = new DateTime($dateDebut);
        $this->dateDeFin = new DateTime($dateDeFin);
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getChambreRes()
    {
        return $this->ChambreRes;
    }
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    public function getDateDeFin()
    {
        return $this->dateDeFin;
    }
    public function setPrenom()
    {
        return $this->prenom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setNbChambreRes($ChambreRes)
    {
        $this->ChambreRes = $ChambreRes;
    }
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }
    public function setDateDeFin($dateDeFin)
    {
        $this->dateDeFin = $dateDeFin;
    }



}