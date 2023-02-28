<?php

class Client
{

    private $firstname;
    private $name;
    private Reservation $reservations;
    private $total_Price;

    public function __construct($firstname, $name, $reservations, $total_Price)
    {
        $this->firstname = $firstname;
        $this->name = $name;
        $this->reservations = $reservations;
        $this->total_Price = $total_Price;
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
    public function getTotalPrice()
    {
        return $this->total_Price;
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
    public function setTotalPrice($total_Price)
    {
        $this->total_Price = $total_Price;
    }

    public function __toString()
    {
        return "ok";
    }
}