<?php

require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genre.php';
include __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Films</title>
</head>
<body class="bg-primary-subtle">

    <main class="container mt-5">
        <h1 class="text-center">Films</h1>
        <div class="rounded-3 contenitore">
            <ul class="row justify-content-center">
                <?php
                    foreach($film_list as $film){
                        echo    '<div class="col-4 p-3">' .
                                    $film->getListFilmInfo() .
                                '</div>';
                    }
                ?>
            </ul>
        </div>
    </main>

</body>
</html>
