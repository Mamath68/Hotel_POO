<?php

class Reservation
{
    private Hotel $hotel;
    private Bedroom $bedroom;
    private DateTime $dateDebut;
    private DateTime $dateDeFin;
    private Client $client;


    public function __construct($hotel, $bedroom, $dateDebut, $dateDeFin, $client)
    {
        $this->hotel = $hotel;
        $hotel->addReservation($this);
        $this->bedroom = $bedroom;
        $bedroom->addReservation($this);
        $bedroom->setStatus(true);
        $this->dateDebut = new DateTime($dateDebut);
        $this->dateDeFin = new DateTime($dateDeFin);
        $this->client = $client;
        $client->addReservation($this);
    }

    public function getHotel()
    {
        return $this->hotel;
    }
    public function getBedroom()
    {
        return $this->bedroom;
    }
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    public function getDateDeFin()
    {
        return $this->dateDeFin;
    }
    public function getClient()
    {
        return $this->client;
    }

    public function setHotel($hotel)
    {
        $this->hotel = $hotel;
    }
    public function setBedroom($bedroom)
    {
        $this->bedroom = $bedroom;
    }
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }
    public function setDateDeFin($dateDeFin)
    {
        $this->dateDeFin = $dateDeFin;
    }
    public function setClient($client)
    {
        $this->client = $client;
    }
    public function addReservation($hotel)
    {
        $this->hotel = $hotel;
    }
    

    public function __tostring()
    {
        return "ok";
    }
}