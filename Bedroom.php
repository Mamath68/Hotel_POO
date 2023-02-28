<?php

class Bedroom
{

    private string $room_Number;
    private bool $status;
    private int $price;
    private bool $wifi;
    private int $nbBed;
    private array $Reservations;

    public function __construct($room_Number, $status, $price, $wifi, $nbBed, $reservations)
    {
        $this->room_Number = $room_Number;
        $this->status = $status;
        $this->price = $price;
        $this->wifi = $wifi;
        $this->nbBed = $nbBed;
        $this->Reservations = $reservations;



    }
}