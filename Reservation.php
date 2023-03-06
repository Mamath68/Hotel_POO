<?php
use Vtiful\Kernel\Format;

class Reservation
{
    private Hotel $hotel;
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

    public function calcPrix()
    {
        $debut = $this->dateDebut;
        $fin = $this->dateDeFin;
        $diff = $fin->diff($debut);
        return $diff->d * $this->bedroom->getPrice();
        ;
    }

    public function __toString()
    {
        return "<p>" . $this->client->getFirstName() . " " . $this->client->getName() . " - Chambre " . $this->bedroom->getRoomNumber() . ", du " . date_format($this->getDateDebut(), 'd-m-Y') . " au " . date_format($this->getDateDeFin(), 'd-m-Y') . "</p>";
    }
}


?>