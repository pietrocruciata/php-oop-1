<?php

$films = [];


class Production
{
    public $title;
    public $language;
    public $vote;
    public $image;

    function __construct($_title, $_language, $_vote, $_image)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;
        $this->image = $_image;
    }
}

$iron_man = new Production('Iron Man 2', 'English', 8, 'https://image.tmdb.org/t/p/w342//6WBeq4fCfn7AN0o21W9qNcRF2l9.jpg');
$films[] = $iron_man;

$rocky = new Production('Rocky', 'English', 9, 'https://image.tmdb.org/t/p/w342//cqxg1CihGR5ge0i1wYXr4Rdeppu.jpg');
$films[] = $rocky;

$barbie = new Production('Barbie', 'English', 9, 'https://image.tmdb.org/t/p/w342//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg');
$films[] = $barbie;

$il_padrino = new Production('Il Padrino', 'Italiano', 7, 'https://image.tmdb.org/t/p/w342//3bhkrj58Vtu7enYsRolD1fZdja1.jpg');
$films[] = $il_padrino;


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
                    <div class=" d-flex justify-content-between flex-wrap">
                        <?php
                        foreach ($films as $film) {
                        ?>
                            <div class="col-6 text-center">
                                <img src="<?php echo $film->image ?>" alt="">
                                <h2><?php echo $film->title ?></h2>
                                <div><?php echo $film->language ?></div>
                                <div><?php echo $film->vote ?></div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>