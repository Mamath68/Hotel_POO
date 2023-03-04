<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Hotel_POO</title>

</head>

<body>
    <h1>Exercice Hotel</h1>
    <?php

    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });


    $h1 = new Hotel("Hilton", "10 route de la Gare", 67000, "Strasbourg");
    $h2 = new Hotel("Regent", "61 rue Dauphine", 75006, "Paris");


    $b1 = new Bedroom(1, 150, false, 2, $h1);
    $b2 = new Bedroom(2, 200, false, 2, $h1);
    $b3 = new Bedroom(3, 120, false, 2, $h1);
    $b4 = new Bedroom(4, 120, false, 2, $h1);
    $b5 = new Bedroom(5, 120, false, 2, $h1);
    $b6 = new Bedroom(6, 120, false, 2, $h1);
    $b7 = new Bedroom(7, 300, false, 2, $h1);
    $b8 = new Bedroom(8, 120, false, 2, $h1);
    $b9 = new Bedroom(9, 120, false, 2, $h1);
    $b10 = new Bedroom(10, 300, false, 2, $h1);
    $b11 = new Bedroom(11, 120, false, 2, $h1);
    $b12 = new Bedroom(12, 120, false, 2, $h1);
    $b13 = new Bedroom(13, 300, false, 2, $h1);
    $b14 = new Bedroom(14, 120, false, 2, $h1);
    $b15 = new Bedroom(15, 120, false, 2, $h1);
    $b16 = new Bedroom(16, 350, false, 2, $h1);
    $b17 = new Bedroom(17, 300, true, 2, $h1);
    $b18 = new Bedroom(18, 250, false, 2, $h1);
    $b19 = new Bedroom(19, 150, false, 2, $h1);
    $b20 = new Bedroom(20, 120, false, 2, $h1);
    $b21 = new Bedroom(21, 120, false, 2, $h1);
    $b22 = new Bedroom(22, 300, false, 2, $h1);
    $b23 = new Bedroom(23, 120, false, 2, $h1);
    $b24 = new Bedroom(24, 120, false, 2, $h1);
    $b25 = new Bedroom(25, 300, false, 2, $h1);
    $b26 = new Bedroom(26, 120, false, 2, $h1);
    $b27 = new Bedroom(27, 120, false, 2, $h1);
    $b28 = new Bedroom(28, 300, false, 2, $h1);
    $b29 = new Bedroom(29, 120, false, 2, $h1);
    $b30 = new Bedroom(30, 120, false, 2, $h1);
    $b1a = new Bedroom(1, 300, false, 2, $h2);
    $b2a = new Bedroom(2, 120, false, 2, $h2);
    $b3a = new Bedroom(3, 120, false, 2, $h2);
    $b4a = new Bedroom(4, 300, false, 2, $h2);
    $b5a = new Bedroom(5, 120, false, 2, $h2);
    $b6a = new Bedroom(6, 120, false, 2, $h2);
    $b7a = new Bedroom(7, 300, false, 2, $h2);
    $b8a = new Bedroom(8, 120, false, 2, $h2);
    $b9a = new Bedroom(9, 120, false, 2, $h2);
    $b10a = new Bedroom(10, 300, false, 2, $h2);
    $b11a = new Bedroom(11, 120, false, 2, $h2);
    $b12a = new Bedroom(12, 120, false, 2, $h2);
    $b13a = new Bedroom(13, 300, false, 2, $h2);
    $b14a = new Bedroom(14, 120, false, 2, $h2);
    $b15a = new Bedroom(15, 120, false, 2, $h2);
    $b16a = new Bedroom(16, 300, false, 2, $h2);
    $b17a = new Bedroom(17, 120, false, 2, $h2);
    $b18a = new Bedroom(18, 120, false, 2, $h2);
    $b19a = new Bedroom(19, 300, false, 2, $h2);
    $b20a = new Bedroom(20, 120, false, 2, $h2);
    $b21a = new Bedroom(21, 120, false, 2, $h2);
    $b22a = new Bedroom(22, 300, false, 2, $h2);
    $b23a = new Bedroom(23, 120, false, 2, $h2);
    $b24a = new Bedroom(24, 120, false, 2, $h2);
    $b25a = new Bedroom(25, 300, false, 2, $h2);
    $b26a = new Bedroom(26, 120, false, 2, $h2);
    $b27a = new Bedroom(27, 120, false, 2, $h2);
    $b28a = new Bedroom(28, 300, false, 2, $h2);
    $b29a = new Bedroom(29, 120, false, 2, $h2);
    $b30a = new Bedroom(30, 120, false, 2, $h2);

    $c1 = new Client("Virgile", "Guibello");
    $c2 = new Client("Micka", "Murmann");

    $r1 = new Reservation($h1, $b17, " 01-01-2021 ", " 01-01-2021", $c1);
    $r2 = new Reservation($h1, $b3, " 11-03-2021 ", " 15-03-2021 ", $c2);
    $r3 = new Reservation($h1, $b4, " 01-04-2021 ", " 17-04-2021 ", $c2);
    ?>
    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
        <h3 class="uk-card-title">Hilton **** Strasbourg</h3>
        <p>
            <?php echo $h1->afficherReservations() ?>
        </p>
    </div>
    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
        <h3 class="uk-card-title">Reservation de l'hotel Hilton **** Strasbourg</h3>
        <p>
            <?php echo $h1->getInfos() . $h2->getInfos(); ?>
        </p>
    </div>
    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
        <h3 class="uk-card-title">Reservation de Micka MURMANN</h3>
        <p>
            <?php echo $c2->getInfos() ?>
        </p>

        <table class="uk-table">
            <h3>Statuts des chambres de Hilton **** Strasbourg</h3>
            <thead>
                <tr>
                    <th>Chambres</th>
                    <th>Prix</th>
                    <th>Wifi</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $b1->getRoomNumber() ?></td>
                    <td><?php echo $b1->getPrice() ?></td>
                    <td><?php echo $b1->getWifi() ?></td>
                    <td><?php echo $b1->getStatus() ?></td>
                    
                </tr>
                <tr>
                    <td><?php echo $b2->getRoomNumber() ?></td>
                    <td><?php echo $b2->getPrice() ?></td>
                    <td><?php echo $b2->getWifi() ?></td>
                    <td><?php echo $b2->getStatus() ?></td>
                </tr>
                <tr>
                    <td><?php echo $b3->getRoomNumber() ?></td>
                    <td><?php echo $b3->getPrice() ?></td>
                    <td><?php echo $b3->getWifi() ?></td>
                    <td><?php echo $b3->getStatus() ?></td>
                </tr>
                <tr>
                    <td><?php echo $b4->getRoomNumber() ?></td>
                    <td><?php echo $b4->getPrice() ?></td>
                    <td><?php echo $b4->getWifi() ?></td>
                    <td><?php echo $b4->getStatus() ?></td>
                </tr>
                <tr>
                    <td><?php echo $b16->getRoomNumber() ?></td>
                    <td><?php echo $b16->getPrice() ?></td>
                    <td><?php echo $b16->getWifi() ?></td>
                    <td><?php echo $b16->getStatus() ?></td>
                </tr>
                <tr>
                    <td><?php echo $b17->getRoomNumber() ?></td>
                    <td><?php echo $b17->getPrice() ?></td>
                    <td><?php echo $b17->getWifi() ?></td>
                    <td><?php echo $b17->getStatus() ?></td>
                </tr>
                <tr>
                    <td><?php echo $b18->getRoomNumber() ?></td>
                    <td><?php echo $b18->getPrice() ?></td>
                    <td><?php echo $b18->getWifi() ?></td>
                    <td><?php echo $b18->getStatus() ?></td>
                </tr>
                <tr>
                    <td><?php echo $b19->getRoomNumber() ?></td>
                    <td><?php echo $b19->getPrice() ?></td>
                    <td><?php echo $b19->getWifi() ?></td>
                    <td><?php echo $b19->getStatus() ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>