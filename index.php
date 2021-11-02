<?php

require_once __DIR__ . "/Classes/Movie.php";

$venom = new Movie('Venom - La furia di Carnage', '14-10-2021', 'Andy Serkis', 'Action');
$eternals = new Movie('Eternals', '03-11-2021', 'Chloè Zhao', 'Action, Adventure, Science Fiction');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Movie</title>
    <style>
        ol > li {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Movie Oop Php</h1>

    <ol>
        <li>
            <ul>
                <li>Title: <?= $venom->getTitle() ?></li>
                <li>Release date: <?= $venom->getReleaseDate() ?></li>
                <li>Director: <?= $venom->getDirector() ?></li>
                <li>Genre: <?= $venom->getGenre() ?></li>
            </ul>
        </li>
        <li>
            <ul>
                <li>Title: <?= $eternals->getTitle() ?></li>
                <li>Release date: <?= $eternals->getReleaseDate() ?></li>
                <li>Director: <?= $eternals->getDirector() ?></li>
                <li>Genre: <?= $eternals->getGenre() ?></li>
            </ul>
        </li>
    </ol>
</body>

</html>