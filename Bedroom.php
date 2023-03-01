<?php

class Bedroom
{

    private string $room_Number;
    private bool $status;
    private int $price;
    private bool $wifi;
    private int $nbBed;
    private array $reservations;
    private Hotel $hotel;

    public function __construct($room_Number,$price, $wifi, $nbBed, $hotel)
    {
        $this->room_Number = $room_Number;
        $this->status = false;
        $this->price = $price;
        $this->wifi = $wifi;
        $this->nbBed = $nbBed;
        $this->reservations = [];
        $this->hotel = $hotel;
    }

    public function getRoomNumber()
    {
        return $this->room_Number;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getWifi()
    {
        return $this->wifi;
    }
    public function getNbBed()
    {
        return $this->nbBed;
    }
    public function getReservation()
    {
        return $this->reservations;
    }

    public function setRoomNumber($room_Number)
    {
        $this->room_Number = $room_Number;
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

}