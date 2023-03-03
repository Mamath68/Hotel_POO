<?php

class Hotel
{
    private $nameHotel;
    // $nameHotel(Nom de l'hotel)

    private $adresse;
    // $adresse(Adresse de l'hotel)

    private $zipcode;
    // $zipcode(Code Postal)

    private $city;
    // $city(Ville)

    private array $bedrooms;
    // $bedroom(Chambre)

    private array $reservations;

    public function __construct($nameHotel, $adresse, $zipcode, $city)
    {
        $this->nameHotel = $nameHotel;
        //   nameHotel(Nom de l'hotel) prendra la valeur de $nameHotel

        $this->adresse = $adresse;
        //   adresse(Adresse de l'hotel) prendra la valeurs de $adresse

        $this->zipcode = $zipcode;
        //   zipcode(Code Postal) prendra la valeur de $zipcode

        $this->city = $city;
        //   city(Ville) prendra la valeur de $city

        $this->bedrooms = [];

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
    public function getZipCode()
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
        return $this->bedrooms;
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
    public function addBedRoom($bedroom)
    {
        $this->bedrooms[] = $bedroom;
    }

    public function addReservation($reservation)
    {
        $this->reservations[] = $reservation;
    }
    // addReservation = ajouter une nouvelle reservation.
    // a l'appel de la fonction, cela rajoutera un objet reservation a mon tableau de reservation de l'hôtel. = Array push.
    public function chambresReservees()
    {
        $nbChambresReservees = 0;
        foreach ($this->bedrooms as $room) {
            if ($room->getStatus() == true) {
                $nbChambresReservees++;
            }
        }
        return $nbChambresReservees;
    }

    public function afficherReservations()
    {
        echo "<p>" . $this->getAdresse() . " " . $this->getZipCode() . " " . strtoupper($this->getCity()) . "</p>";
        echo "<p>Nombre de Chambres : " . count($this->bedrooms) . "</p>";
        echo "<p>Nombre de Chambres réservées : " . $this->chambresReservees() . "</p>";
        echo "<p>Nombre de chambres Dispo : " . count($this->bedrooms) - $this->ChambresReservees() . "</p>";
    }

    // en appelant la fonction, cela affichera : Reservation de l'hotel : Hilton **** Strasbourg + le nombre de reservation. 

    public function getInfos()
    {
        if (count($this->reservations) > 0) {
            echo "<p class='color'>" .count($this->reservations) . mb_strtoupper(' Réservations ');
            foreach ($this->reservations as $reservation) {
                echo $reservation . " </p>";
            }
        } else {
            echo "<h3>Réservation de l'hôtel " . $this->getNameHotel() . " **** " . $this->getCity() . "</h3>
            <p>Aucune Réservation !</p>";
        }
    }

    public function __tostring()
    {
        return "<h2>" . $this->getNameHotel() . " **** " . $this->getCity() . "</h2>"
            . "<p>" . $this->getAdresse() . " " . $this->getZipCode() . " " . $this->getCity() . "</p>";
    }

}

?>