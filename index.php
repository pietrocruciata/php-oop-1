<?php


include_once __DIR__ . '/production.php';
include_once __DIR__ . '/movies.php';
include_once __DIR__ . '/tv_series.php';


//CREO L'ARRAY DI FILM

$films = [

    new Movie('Iron Man 2', 'English', 8, 'https://image.tmdb.org/t/p/w342//6WBeq4fCfn7AN0o21W9qNcRF2l9.jpg', '$ high', '2h'),

    new Movie('Rocky', 'English', 9, 'https://image.tmdb.org/t/p/w342//cqxg1CihGR5ge0i1wYXr4Rdeppu.jpg', '$ high', '2h'),

    new Movie('Barbie', 'English', 9, 'https://image.tmdb.org/t/p/w342//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', '$ high', '2h 10m'),

    new Movie('Il Padrino', 'Italiano', 7, 'https://image.tmdb.org/t/p/w342//3bhkrj58Vtu7enYsRolD1fZdja1.jpg', '$ medium', '1h 30m'),
];

//CREO L'ARRAY DI SERIE TV

$series = [
    
    new TVSeries('Casa the papel', 8, 'Espagnol', 'https://image.tmdb.org/t/p/w342//reEMJA1uzscCbkpeRJeTT2bjqUp.jpg', 5),

    new TVSeries('Breaking bad ', 8, 'English', 'https://image.tmdb.org/t/p/w342//ApitDfnYDwFNOPfyVuhW5ElWzhe.jpg', 5),

    new TVSeries('Prison break ', 10, 'English', 'https://image.tmdb.org/t/p/w342//h1QRyGuWVXM4Cr3FyPISSjMCBkA.jpg', 6),

    new TVSeries('Vis a Vis ', 9, 'Espagnol', '	https://image.tmdb.org/t/p/w342//1kH9u5DkoDUuIlhFFWjz9VSlKhC.jpg', 5),
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cinematografia</title>
</head>

<body>
    <div id="app">
        <main>
            <div class="container">
                <div class="row ">
                    <h2 class="text-center p-3">MOVIES</h2>
                    <div class=" d-flex flex-wrap ">
                        <!-- CICLO I MIEI FILM E LI STAMPO IN PAGINA -->
                        <?php
                        foreach ($films as $film) {
                        ?>
                            <div class="col-3 text-center">
                                <img src="<?php echo $film->image ?>" alt="">
                                <h2>TITOLO: <?php echo $film->title ?></h2>
                                <div>LINGUA: <?php echo $film->language ?></div>
                                <div>VOTAZIONE: <?php echo $film->vote ?></div>
                                <div>PROFITTI: <?php echo $film->profit ?></div>
                                <div>DURATA: <?php echo $film->duration ?></div>

                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <h2 class="text-center p-3">SEIRE TV</h2>
                    <div class=" d-flex  flex-wrap ">
                        <!-- CICLO LE MIE SERIE TV E LE STAMPO IN PAGINA -->
                        <?php
                        foreach ($series as $serie) {
                        ?>
                            <div class="col-3 text-center">
                                <img src="<?php echo $serie->image ?>" alt="">
                                <h2>TITOLO: <?php echo $serie->title ?></h2>
                                <div>LINGUA: <?php echo $serie->language ?></div>
                                <div>VOTAZIONE: <?php echo $serie->vote ?></div>
                                <div>STAGIONI: <?php echo $serie->seasons ?></div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                </div>
        </main>
    </div>
</body>

</html>