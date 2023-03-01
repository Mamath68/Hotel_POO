<title>Hotel_POO</title>
<h1>Exercice Hotel</h1>
<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$h1 = new Hotel("Hilton", "10 route de la Gare", 67000, "Strasbourg");
$h2 = new Hotel("Regent", "61 rue Dauphiné", 75006, "Paris");

$b1 = new Bedroom(17, 300, true, 2, $h1);
$b2 = new Bedroom(3, 120, false, 2, $h1);
$b3 = new Bedroom(4, 120, false, 2, $h1);

$c1 = new Client("Virgile", "Guibello");
$c2 = new Client("Micka", "Murmann");

$r1 = new Reservation("Hilton", 17, " 01 - 01 - 2021", " 01 - 2021 - 2021", $c1);
$r2 = new Reservation("Hilton", 3, "11-03-2021", "15 - 03 - 2021", $c2);
$r3 = new Reservation("Hilton", 4, "01-04-2021", "17 - 04 - 2021", $c2);


?>