<?php

class Movie{
    public $titolo;
    public $poster;
    public $anno;
    public $genere;
    

    //costruttore

    public function __construct ($titolo, $genere, $poster){
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->poster = $poster;
    }

     public function setAnno($anno){
        $this->anno = $anno;
    }

    public function getAnno(){
        return $this->anno;
    }
    
    public function stampa(){
       echo "
        <div class='card' style='width: 18rem;'>
            <img src='$this->poster' class='card-img-top' alt='...'>   
            <div class='card-body'>
                <h5 class='card-title text-center'>$this->titolo</h5>
                <h6 class='text-center'>$this->genere</h6>
                <p class='text-center'>$this->anno</p>
            </div> 
        </div>";
    }
}

$movies = [];


    $movie1 = new Movie ("Il Signore degli Anelli - Le due torri", "Avventura, Fantasy, Azione", "https://www.themoviedb.org/t/p/w300_and_h450_bestv2/fVKewiBPcY2dQujYEsnQmQ7lfRZ.jpg");
    $movie1->setAnno("2003");
    array_push($movies, $movie1);

    $movie2= new Movie ("Hachiko - Il tuo migliore amico", "Dramma, Famiglia", "https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ag59RClKGBa60Ymbcucr73394yV.jpg");
    $movie2->setAnno("2009");
    array_push($movies, $movie2);

    $movie3 = new Movie ("Maquia", "Animazione, Fantasy, Romance, Dramma", "https://www.themoviedb.org/t/p/w300_and_h450_bestv2/nIiW6IR2zGBZm3vUhQTWUsXbEyC.jpg");
    $movie3->setAnno("2018");
    array_push($movies, $movie3);

    $movie4 = new Movie ("Your Name", "Romance, Animazione, Dramma
    ", "https://www.themoviedb.org/t/p/w300_and_h450_bestv2/z26TZXh7lqrRVCIy1HXTTz3Fu2X.jpg");
    $movie4->setAnno("2016");
    array_push($movies, $movie4);
  
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .card{
            height:600px
        }
    </style>
</head>
<body>
    <header>
        <div class="p-4 border-bottom">
            <h1>Movies</h1>
        </div>
    </header>
    <main>
        <div class="container my-5">
            <div class="row row-cols-4">
            <?php foreach ($movies as $movie): ?>
                <div class="col"> 
                    <?php $movie->stampa() ?>

                </div>
                <?php endforeach ?>
            </div>

        </div>
    </main>

</body>
</html>