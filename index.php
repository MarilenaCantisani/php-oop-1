<?php

//// Bring back the file containing the movie class
require_once __DIR__ . '/models/Movie.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to css style file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Movies</title>
</head>

<body>
    <header>
        <h1 class="text-center">MOVIES</h1>
    </header>
    <main class="container">
        <!-- Movie n.1 -->
        <section id="movie-1" class="movie">
            <figure>
                <a href="#"><img src="<?= $movie_1->cover ?>" alt="<?= $movie_1->title ?>"></a>
            </figure>
            <div class="description">
                <h2><?= $movie_1->title ?></h2>
                <address><strong class="font-normal">Directed by:</strong> <?= $movie_1->director ?>;</address>
                <span><strong>Genres:</strong> <?= $movie_1->genres ?>; </span>
                <p><?= $movie_1->plot ?></p>
            </div>
        </section>
        <!-- Movie n.2 -->
        <section id="movie-2" class="movie">
            <figure>
                <a href="#"><img src="<?= $movie_2->cover ?>" alt="<?= $movie_2->title ?>"></a>
            </figure>
            <div class="description">
                <h2><?= $movie_2->title ?></h2>
                <address><strong class="font-normal">Directed by:</strong> <?= $movie_2->director ?>;</address>
                <span><strong>Genres:</strong> <?= $movie_2->genres ?>; </span>
                <p><?= $movie_2->plot ?></p>
            </div>
        </section>
        <!-- Movie n.3 -->
        <section id="movie-3" class="movie">
            <figure>
                <a href="#"><img src="<?= $movie_3->cover ?>" alt="<?= $movie_3->title ?>"></a>
            </figure>
            <div class="description">
                <h2><?= $movie_3->title ?></h2>
                <address><strong class="font-normal">Directed by:</strong> <?= $movie_3->director ?>;</address>
                <span><strong>Genres:</strong> <?= $movie_3->genres ?>; </span>
                <p><?= $movie_3->plot ?></p>
            </div>
        </section>
        <!-- Movie n.4 -->
        <section id="movie-4" class="movie">
            <figure>
                <a href="#"><img src="<?= $movie_4->cover ?>" alt="<?= $movie_4->title ?>"></a>
            </figure>
            <div class="description">
                <h2><?= $movie_4->title ?></h2>
                <address><strong class="font-normal">Directed by:</strong> <?= $movie_4->director ?>;</address>
                <span><strong>Genres:</strong> <?= $movie_4->genres ?>; </span>
                <p><?= $movie_4->plot ?></p>
            </div>
        </section>
    </main>
</body>

</html>