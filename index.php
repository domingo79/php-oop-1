<?php
require __DIR__ . '/classes/Movie.php';

$movies = [
    new Movie(
        'film1',
        'Ricomincio da te.',
        'https://cdn.chili.com/images/public/cms/66/8d/bc/06/668dbc06-9d24-459a-bf61-7d7b1d998843.jpg?width=495',
        9.99,
        'Romantico',
        110,
        0,
        6.00,
        2019,
        'Drake Doremus',
        'La trentenne Daphne è alle prese con un bilancio della sua vita, dopo la fine di una relazione tormentata. A una festa, incontra due uomini affascinanti e completamente opposti, nonché migliori amici: Frank, il "cattivo ragazzo", bello e inaffidabile, e Jack, equilibrato e sensibile. Daphne si lascia ammaliare da entrambi, intrecciando relazioni amorose totalmente distinte che le permetteranno di (ri)scoprire la vita e se stessa. Ma il destino ha per lei altri piani.'
    ),
    new Movie(
        'film2',
        'QT8: The first eight',
        'https://cdn.chili.com/images/public/cms/85/6f/a5/2d/856fa52d-801d-4d02-bcdc-53be52123e88.jpg?width=495',
        6.99,
        'Biografia',
        120,
        0,
        6,
        2019,
        'Tara Wood',
        'Un documentario sui primi 21 anni di carriera del regista Quentin Tarantino, con interviste ai suoi frequenti collaboratori.'
    )
];
var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>