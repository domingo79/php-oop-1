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
    <script src="https://kit.fontawesome.com/2c30adbff5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./asset/css/style.css">
    <title><?= $titolo ?></title>
</head>

<body>

    <div class="container">

        <?php foreach ($movies as $move) : ?>
            <div class="scene">
                <div class="card">
                    <div class="card_face face_front">
                        <div class="card_img">
                            <img src="<?= $move->poster; ?>" alt="">
                        </div>
                        <div class="card_head">
                            <h2>Titolo: <?= $move->title; ?></h2>
                        </div>
                        <div class="card_body">
                            <span>Genere: <?= $move->genre; ?></span>
                            <span>Durata: <?= $move->duration; ?>'' min</span>
                            <span>Voto:
                                <?php for ($i = 0; $i < round($move->rating / 2, 0); $i++) : ?>
                                    <i class="fas fa-star"></i>
                                <?php endfor; ?>
                            </span>
                            <span>Prezzo: € <?= $move->price; ?></span>
                            <button class="btn">trama...</button>
                        </div>
                        <div class="card_footer">
                            <span>Anno: <?= $move->year; ?> </span>
                            <span>Regista: <?= $move->direction; ?></span>
                        </div>
                    </div>
                    <div class="card_face face_back">
                        <p><?= $move->descript ?></p>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="./asset/js/main.js"></script>

</body>

</html>