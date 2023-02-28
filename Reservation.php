<?php

class Reservation
{
    private $prenom;
    private $nom;
    private $ChambreRes;
    private DateTime $dateDebut;
    private DateTime $dateDeFin;

    public function __construct($nom, $prenom,$ChambreRes, $dateDebut, $dateDeFin)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->ChambreRes = $ChambreRes;
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