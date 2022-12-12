<?php

require __DIR__ . '/Movie.php';

$listOfFilms = [
    new Movie('Matrix',  [new Genre('Fantasy'), new Genre('Action')], 'Lorem ipsum dolor', 'https://www.themoviedb.org/t/p/w220_and_h330_face/5uCQOswAMkOqUZiNzOxvckw59e3.jpg'),
    new Movie('Matrix II', [new Genre('Fantasy'), new Genre('Action')], 'Lorem ipsum dolor', 'https://www.themoviedb.org/t/p/w220_and_h330_face/bgx0hblyE1XYWHFFewrYjXE6DeQ.jpg')
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Films</title>
</head>

<body class="bg-dark">
    <div class="container d-flex justify-content-center  align-items-center vh-100">
        <div class="row">
            <?php foreach ($listOfFilms as $singleFilm) : ?>
                <div class="col p-3">
                    <div class="card h-100 p-4">
                        <h3><?= $singleFilm->name ?></h3>
                        <h5>Generi:</h5>
                        <?php foreach ($singleFilm->genres as $singleGenre) : ?>
                            <p><?= $singleGenre->name ?></p>
                        <?php endforeach  ?>
                        <h5>Descrizione:</h5>
                        <p><?= $singleFilm->description ?></p>

                        <div class="image w-50 h-50">
                    <img src="<?= $singleFilm->coverImage ?>" alt="">
                </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>