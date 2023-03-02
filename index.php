<title>Hotel_POO</title>
<h1>Exercice Hotel</h1>

<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$h1 = new Hotel("Hilton", "10 route de la Gare", 67000, "Strasbourg");
var_dump($h1);
echo $h1->afficherReservation();

$b1 = new Bedroom(17, 300, true, 2, $h1);
$b2 = new Bedroom(3, 120, false, 2, $h1);
$b3 = new Bedroom(4, 120, false, 2, $h1);


$c1 = new Client("Virgile", "Guibello");
$c2 = new Client("Micka", "Murmann");
// var_dump($c1);

$r1 = new Reservation($h1, $b1, " 01-01-2021 ", " 01-01-2021", $c1);
// var_dump($r1);
echo $h1->chambresReservees();
$r2 = new Reservation($h1, $b2, " 11-03-2021 ", " 15-03-2021 ", $c2);
$r3 = new Reservation($h1, $b3, " 01-04-2021 ", " 17-04-2021 ", $c2);


?>