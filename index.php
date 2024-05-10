<?php
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

class Movie extends Production
{
    public $profit;
    public $duration;

    function __construct($_title, $_language, $_vote, $_image, $_profit, $_duration)
    {
        parent::__construct($_title, $_language, $_vote, $_image);
        $this->profit = $_profit;
        $this->duration = $_duration;
    }
}

class TVSeries extends Production
{
    public $seasons;

    function __construct($_title, $_language, $_vote, $_image, $_seasons)
    {
        parent::__construct($_title, $_language, $_vote, $_image);
        $this->seasons = $_seasons;
    }
}


$iron_man = new Movie('Iron Man 2', 'English', 8, 'https://image.tmdb.org/t/p/w342//6WBeq4fCfn7AN0o21W9qNcRF2l9.jpg', '$ high', '2h');

$rocky = new Movie('Rocky', 'English', 9, 'https://image.tmdb.org/t/p/w342//cqxg1CihGR5ge0i1wYXr4Rdeppu.jpg', '$ high', '2h');

$barbie = new Movie('Barbie', 'English', 9, 'https://image.tmdb.org/t/p/w342//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', '$ high', '2h 10m');

$il_padrino = new Movie('Il Padrino', 'Italiano', 7, 'https://image.tmdb.org/t/p/w342//3bhkrj58Vtu7enYsRolD1fZdja1.jpg', '$ medium', '1h 30m');

$films = [$il_padrino, $barbie, $rocky, $iron_man];

$papel = new TVSeries('Casa the papel', 8, 'Espagnol', 'https://image.tmdb.org/t/p/w342//reEMJA1uzscCbkpeRJeTT2bjqUp.jpg', 5);
$breaking_bad = new TVSeries('Breaking bad ', 8, 'English', 'https://image.tmdb.org/t/p/w342//ApitDfnYDwFNOPfyVuhW5ElWzhe.jpg', 5);
$prison_break= new TVSeries('Prison break ', 10, 'English', 'https://image.tmdb.org/t/p/w342//h1QRyGuWVXM4Cr3FyPISSjMCBkA.jpg', 6);
$vis= new TVSeries('Vis a Vis ', 9, 'Espagnol', '	https://image.tmdb.org/t/p/w342//1kH9u5DkoDUuIlhFFWjz9VSlKhC.jpg', 5);



$series = [$papel, $breaking_bad, $prison_break, $vis];
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