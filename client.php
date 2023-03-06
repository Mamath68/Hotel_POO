<?php

class Client
{

    private string $firstname;
    // string(chaine de caractère); $firstname = $prénom
    private string $name;
    // string(chaine de caractère); $name = $nom
    private array $reservations;
    // array(tableau); 1 client peut avoir plusieurs réservation, mais une reservation n'as qu'un seul client.


    public function __construct($firstname, $name)
    {
        $this->firstname = $firstname;
        //   firstname(prénom) prendra la valeur de $firstname
        $this->name = $name;
        //   name(Nom) prendra la valeur de $name
        $this->reservations = [];
        // a la construction de mon objet client, il dispose d'un tableau de resevation vide.
    }

    public function getFirstName()
    {
        return $this->firstname;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getReservation()
    {
        return $this->reservations;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }
    public function setName($name)
    {
        $this->name = $name;
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


    public function getInfos()
    {
        if (count($this->reservations) > 0) {
            echo '<p class="color">' . count($this->reservations) . mb_strtoupper(" Réservations ") . '</p>';
        }
        $total = 0;
        foreach ($this->reservations as $reservation) {
            echo "Hotel : " .
                $reservation->getHotel()->getNameHotel() . " **** " . $reservation->getHotel()->getCity() . " / Chambre : " .
                $reservation->getBedRoom()->getRoomNumber() . " ( " .
                $reservation->getBedRoom()->getNbBed() . " lits - " .
                $reservation->getBedRoom()->getPrice() . " € -  Wifi : " .
                $reservation->getBedRoom()->getWifi() . " ) du " .
                date_format($reservation->getDateDebut(), 'd-m-Y') . " au " .
                date_format($reservation->getDateDeFin(), 'd-m-Y') . "<br>";
            $total += $reservation->calcPrix();
        }
        echo "Total : ".$total. " €";
    }
}