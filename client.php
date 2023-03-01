<?php

class Client
{

    private $firstname;
    private $name;
    private array $reservations;

    public function __construct($firstname, $name)
    {
        $this->firstname = $firstname;
        $this->name = $name;
        $this->reservations = [ ];
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

    public function __toString()
    {
        return "ok";
    }
}