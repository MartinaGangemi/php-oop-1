<?php

class Movie{
    public $titolo;
    public $anno;
    public $genere;
    public $trama;

    //costruttore

    function __construct ($titolo){
        $this->titolo = $titolo;
    }

    function stampa(){
        echo "il titolo del film è $this->titolo";
    }

}

$movie1= new Movie ("pinco pallo");
$movie1->stampa();
var_dump($movie1);



?>