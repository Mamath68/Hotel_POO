<title>Hotel_POO</title>

<?php
include "Hilton.php";
include "Reservation.php";

$hilton = new Hilton("Hotel", "Hilton", "10 route de la Gare, 67000 Strasbourg", 30, 3, 27);
// $regent = new Regent ()
$r1 = new Reservation("Virgile", "Gribello", 17, 01 - 01 - 2021, 01 - 01 - 2021);
$r2 = new Reservation("Mika", "Murmann", 3, 11 - 03 - 2021, 11 - 03 - 2021);
$r3 = new Reservation("Mika", "Murmann", 4, 01 - 04 - 2021, 01 - 04 - 2021);



?>