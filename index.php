<?php
require_once __DIR__ . '/classes/Movie.php';

$batman = new Movie('The Dark Knight Returns', 125, 'action');
$toy_story = new Movie('Toy Story', 75, 'animation');


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
</head>

<body>



    <div id="batman">
        <h2>Batman</h2>
        <div>Nome film:
            <?php
            echo $batman->getMovieTitle();
            ?>

        </div>
        <div>Durata: min
            <?php
            echo $batman->getMovieDuration();
            ?>

        </div>
        <div>Genere:
            <?php
            echo $batman->getMovieGenre();
            ?>

        </div>
    </div>


    <div id="toy_story">
        <h2>Toy Story</h2>
        <div>Nome film:
            <?php
            echo $toy_story->getMovieTitle();
            ?>

        </div>
        <div>Durata: min
            <?php
            echo $toy_story->getMovieDuration();
            ?>

        </div>
        <div>Genere:
            <?php
            echo $toy_story->getMovieGenre();
            ?>

        </div>
    </div>











</body>

</html>