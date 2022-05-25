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


$movie1= new Movie ("Il Signore degli Anelli - Le due torri", "Avventura, Fantasy", "https://www.themoviedb.org/t/p/w533_and_h300_bestv2/kWYfW2Re0rUDE6IHhy4CRuKWeFr.jpg");
$movie1->setAnno("2003");

$movie2= new Movie ("Hachiko - Il tuo migliore amico", "Dramma, Famiglia", "https://www.newsby.it/wp-content/uploads/2021/05/hachiko.jpg");
$movie1->setAnno("2009");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="p-4 border-bottom">
            <h1>Movie</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <?php echo $movie1->stampa() ?>
                </div>
                <div class="col">
                    <?php echo $movie2->stampa() ?>
                </div>
            </div>
            
            
        </div>
    </main>
    
</body>
</html>

