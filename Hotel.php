<?php

class Hotel
{
    private $nameHotel;

    private $adresse;

    private $zipcode;

    private $city;

    private $bedroom;

    private array $reservations;

    public function __construct($nameHotel, $adresse, $zipcode, $city)
    {
        $this->nameHotel = $nameHotel;
        //   nameHotel(Nom de l'hotel) prendra la valeur de $nbHotel

        $this->adresse = $adresse;
        //   adresse(Adresse de l'hotel) prendra la valeurs de $adresse

        $this->zipcode = $zipcode;
        //   zipcode(Code Postal) prendra la valeur de $zipcode

        $this->city = $city;
        //   city(Ville) prendra la valeur de $city

        $this->reservations = [];
        // a la construction de mon objet Hotel, il dispose d'un tableau de resevation vide.

    }

    public function getNameHotel()
    {
        return $this->nameHotel;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getZiptCode()
    {
        return $this->zipcode;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getReservations()
    {
        return $this->reservations;
    }
    public function getBedRoom()
    {
        return $this->bedroom;
    }

    public function setNameHotel($nameHotel)
    {
        $this->nameHotel = $nameHotel;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }
    public function setReservations($reservations)
    {
        $this->reservations = $reservations;
    }
    public function setBedRoom($bedroom)
    {
        $this->bedroom = $bedroom;
    }

    public function addReservation($reservation)
    {
        $this->reservations[] = $reservation;
    }
    // addReservation = ajouter une nouvelle reservation.

    public function afficherReservation()
    {
        echo "<h2>Reservation de :" . $this->getNameHotel() . " **** " . $this->getCity() . "</h2>";
        foreach ($this->reservations as $reservation) {
            echo $reservation . "<br>";
        }
    }
// en appelant la fonction, cela affichera : Reservation de l'hotel : Hilton **** Strasbourg + le nombre de reservation. 

    public function chambresReservees()
    {
        $nbChambresReservees = 0;
        foreach ($this->bedroom as $room) {
            if ($room->getStatus() == true) {
                $nbChambresReservees++;
            }
        }
        return $nbChambresReservees;
    }
// Calcul complexe et pas tant que ça en même temps pour claculer le nombre de chambres reserver dans l'hotel.

    public function __tostring()
    {
        return "ok";
    }

}

?>