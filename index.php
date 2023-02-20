<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$select_parcheggio = $_GET['parcheggio'];
$select_voto = $_GET['voto'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="background">
        <div class="hotel"> <!-- Stampa di tutti i dati degli hotel -->
            <?php foreach ($hotels as $infoHotel) { ?>
                <div class="hotelInfo">
                    <h2><?php echo $infoHotel['name']; ?></h2>
                    <p> <?php echo $infoHotel['description']; ?> </p>
                    <div> <?php echo 'Parcheggio: ' . ($infoHotel['parking'] ? 'disponibile' : 'non disponibile'); ?> </div>
                    <span> <?php echo 'Valutazione Hotel: ' . $infoHotel['vote']; ?></span>
                    <span>★</span>
                    <div> <?php echo 'Distanza dal centro: ' . $infoHotel['distance_to_center'] . 'm'; ?></div>
                </div>
            <?php } ?>
        </div>
        <div class="forms">
            <div class="formUno"> <!-- Form per bonus 1-->
                <form action="" method="GET">
                    <div>
                        <label for="parcheggio">Filter by Parking</label>
                        <select name="parcheggio" id="byParking">
                            <option selected value="parking?"></option>
                            <option value="yesParking">Con parcheggio</option>
                            <option value="noParking">Senza parcheggio</option>
                        </select>
                        <label for="voto">Filter by minimum Rate</label>
                        <select name="voto" id="byRate">
                            <option selected value="rating?"></option>
                            <option value="Hotel 1 ★">Hotel 1 ★</option>
                            <option value="Hotel 2 ★">Hotel 2 ★</option>
                            <option value="Hotel 3 ★">Hotel 3 ★</option>
                            <option value="Hotel 4 ★">Hotel 4 ★</option>
                            <option value="Hotel 5 ★">Hotel 5 ★</option>
                        </select>
                        <button>
                            filter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>