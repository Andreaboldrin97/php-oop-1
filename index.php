<!-- include movie.php -->
<?php
include __DIR__ . '/class_php/movies.php';

// Creo l'array dei film :
$movies = [];
// aggiungo nell'array le careristiche dei film grazie al costrutto
$movies[] = new Movie('Iron Man', "Tony Stark è considerato da tutti un genio, un playboy, un filantropo e un inventore; in realtà è un uomo dalla personalità complessa, e dal “cuore ferito”. La storia di Iron Man, il Vendicatore Armato, diventa il simbolo dell'ingegno e della creatività umana, così come di una tragedia del tutto personale.", "2008", "Marvel Studios", "https://www.comicsuniverse.it/wp-content/uploads/2018/05/Iron-Man-movie-poster.jpg");
$movies[] = new Movie('Captain America: Il Primo Vendicatore', "Steve è un giovanotto smilzo che vuole ad ogni costo arruolarsi nell'esercito per combattere i nazisti. Putroppo viene regolarmente scartato, ma un giorno gli si presenta la possibilità di fare da cavia: gli iniettano così il siero del supersoldato.", "2011", "Marvel Studios", "https://pad.mymovies.it/filmclub/2008/06/089/locandina.jpg");
$movies[] = new Movie('Avengers: Age of Ultron', "Gli Avengers si ricongiungono allo scopo di unire le proprie forze a quelle dei nuovi arrivati Quicksilver e Scarlet. Il fine è la lotta contro il robot malefico chiamato Ultron, creato da Tony Stark con intenzioni pacifiche ma trasformato in una macchina infernale assetata di sangue.", "2015", "Marvel Studios", "https://www.themoviedb.org/t/p/original/tTzs0sigsjYotvnlSz2FYq0tx6M.jpg");
$movies[] = new Movie('Avengers: Endgame', "Alla deriva nello spazio senza cibo o acqua, Tony Stark vede la propria scorta di ossigeno diminuire di minuto in minuto. Nel frattempo, i restanti Vendicatori affrontano un epico scontro con Thanos.", "2019", "Marvel Studios", "https://static.posters.cz/image/1300/poster/avengers-endgame-journey-s-end-i122136.jpg");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP movie</title>
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row justify-content-center">

                <?php foreach ($movies as $movie) { ?>
                    <div class="card m-3 col-2">
                        <img src="<?php echo $movie->getFilmPoster(); ?>" class="card-img-top" alt="<?php echo $movie->getTitle() ?>">
                        <div class="card-body">
                            <h5><?php echo $movie->getTitle() ?></h5>
                            <p class="card-text"><?php echo $movie->getDescription() ?></p>
                            <p class="card-text"><?php echo $movie->getFilmCompany() ?></p>
                            <h5><?php echo $movie->getDate() ?></h5>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </main>
    <!-- JavaScript BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>