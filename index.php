<?php
require __DIR__ . '/classes/Movie.php';
require __DIR__ . '/database-film/db-movies.php';
$titolo = 'Film On-line';
//var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title><?= $titolo ?></title>
</head>

<body>
    <div class="container">
        <?php foreach ($movies as $move) : ?>
            <div class="card">
                <div class="card_img">
                    <img src="<?= $move->poster; ?>" alt="">
                </div>
                <div class="card_head">
                    <h2>Titolo: <?= $move->title; ?></h2>
                </div>
                <div class="card_body">
                    <span>Genere: <?= $move->genre; ?></span>
                    <span>Durata: <?= $move->duration; ?>'' min</span>
                    <span>Voto: <?= $move->rating; ?></span>
                    <span>Prezzo: € <?= $move->price; ?></span>
                    <a href="">trama...</a>
                </div>
                <div class="card_footer">
                    <span>Anno: <?= $move->year; ?> </span>
                    <span>Regista: <?= $move->direction; ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>