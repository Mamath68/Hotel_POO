<?php

class Hotel
{
    private $nameHotel;
    private $adresse;
    private $zipcode;
    private $city;
    private $bedroom;
    private $reservations;


    public function __construct($nameHotel, $adresse, $zipcode, $city)
    {
        $this->nameHotel = $nameHotel;
        $this->adresse = $adresse;
        $this->zipcode = $zipcode;
        $this->city = $city;
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

    public function __tostring()
    {
        return "ok";
    }

}