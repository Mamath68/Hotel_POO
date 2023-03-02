<?php

class Reservation
{
    private Hotel $hotel;
    // unz reservation sera liée à un seul objet hotel
    // clé étrangère de Hotel
    private Bedroom $bedroom;
    // clé étrangère de bedroom(chambre)
    private DateTime $dateDebut;
    // Date de debut de reservation
    private DateTime $dateDeFin;
    // Date de fin de reservation
    private Client $client;
    // clé étrangère de client


    public function __construct($hotel, $bedroom, $dateDebut, $dateDeFin, $client)
    {
        $this->hotel = $hotel;
        //  hotel prend la valeur de $hotel
        $hotel->addReservation($this);
        //   en appeelant addReservation, $this prendra la valeur de $hotel

        $this->bedroom = $bedroom;
        //  bedroom prend la valeur de $bedroom
        
        $bedroom->addReservation($this);
        //   en appeelant addReservation, $this prendra la valeur de $bedroom
        
        $bedroom->setStatus(true);
        // $bedroom prend la valeur de setStatus, a savoir "true"
        $this->dateDebut = new DateTime($dateDebut);
        //  dateDebut prend la valeur du DateTime($dateDebut)
        
        $this->dateDeFin = new DateTime($dateDeFin);
        //  dateDeFin prend la valeur du DateTime($dateDeFin)

        $this->client = $client;
        //  client prend la valeur de $client

        $client->addReservation($this);
        //   en appeelant addReservation, $this prendra la valeur de $client

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

    public function __tostring()
    {
        return "ok";
    }
}


?>