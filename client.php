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
    public function __toString()
    {
        return "ok";
    }
}