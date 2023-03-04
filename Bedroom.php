<?php

class Bedroom
{
    private $roomNumber;
    // roomNumer = numéro de chambre
    private bool $status;
    // booleen(vrai ou faux, 1 ou 0); $status = status de chambre
    private int $price;
    // int(integer); $price = le prix de la chambre.
    private bool $wifi;
    // booleen(vrai ou faux, 1 ou 0); $yifi = disponibilité du WIFI
    private int $nbBed;
    // int(integer); $nbBed = Nombre de lits dans la chambre.
    private array $reservations;
    // array(tableau); une chambre ne peux avoir qu'une reservation a la fois.
    private Hotel $hotel;
    // Clef Etrangère de Hotel dans Bedroom

    public function __construct($roomNumber, $price, $wifi, $nbBed, $hotel)
    // Affiche dans l'ordre : $roomNumber=Numéro de chambre, $price=Prix de la chambre, $wifi = Disponibilité du Wifi, $nbBed = Nombre de lits dans la chambre, $hotel = Clef étrangère de l'hotel.
    {
        $this->roomNumber = $roomNumber;
        //   RoomNumer(Numero de chambre) prendra la valeur de $roomNumber
        $this->status = false;
        //   status(Status de la chambre(libre ou occupé)) prendra la valeurs de false
        $this->price = $price;
        //   price(prix de la chambre) prendra la valeur de $price
        $this->wifi = $wifi;
        //   wifi(Disponibilité de la Wifi) prendra la valeur de $wifi
        $this->nbBed = $nbBed;
        //   nbBed(nombre de lits) prendra la valeur de $nbBed
        $this->reservations = [];
        // a la construction de mon objet Bedroom, il dispose d'un tableau de resevation vide.
        $this->hotel = $hotel;
        //   hotel(Hotel) prendra la valeur de $hotel(Clé étrangère de hotel)
        $hotel->addBedRoom($this);
        //   en appeelant addReservation, $this prendra la valeur de $hotel
    }


    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    public function getStatus()
    {
        if ($this->status == false) {
            $status = "Disponible";
        } else {
            $status = "Réservée";
        }
        return $status;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getWifi()
    {
        if ($this->wifi == true) {
            $wifi = "Oui";
        } else {
            $wifi = "Non";
        }
        return $wifi;
    }

    public function getNbBed()
    {
        return $this->nbBed;
    }

    public function getReservation()
    {
        return $this->reservations;
    }


    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }

    public function setNbBed($nbBed)
    {
        $this->nbBed = $nbBed;
    }

    public function setReservation($reservations)
    {
        $this->reservations = $reservations;
    }

    public function addReservation($reservation)
    {
        $this->reservations[] = $reservation;
    }
    // addReservation = ajouter une nouvelle reservation.

    // public function calculerDuree()
    // {
    //     // recuper dateDebut et DateDeFin de la reservation.
    //     // diff entre les deux dates
    //     // return format en jours (d)
    //     $bday = $this->hotel->dateDebut();
    //     $now = $reservation->dateDeFin();
    //     $diff = $now->diff($bday);

    //     return $diff->d;
    // }
    // public function calculerPrixTTC()
    // {
    //     $prixTTC = $diff->d * $this->getPrice();

    //     echo $prixTTC;
    // }

    public function getInfos()
    {
        echo "<p>" . $this->getRoomNumber() . " " . $this->getPrice() . " " . $this->getWifi() . " " . $this->getNbBed();
        // echo $this->calculerPrixTTC() . " € <p>";
    }

    public function __toString()
    {
        return $this->getRoomNumber() . " " . $this->getPrice() . " " . $this->getWifi() . " " . $this->getNbBed();
    }
}