<!-- definire una classe ‘Movie’ -->

<?php
    class Movie{

        // all'interno della classe sono dichiarate delle variabili d'istanza
        public $name = "" ;
        public $durata = "";

        // all'interno della classe è definito un costruttore
        public function __construct($arg1, $arg2) {
            $this->name = $arg1;
            $this->durata = $arg2;
        }

        // all'interno della classe è definito almeno un metodo
        public function sayMovie() {
            echo " il film si chiama " . $this->name . " " . "e dura ". " " . $this->durata;
    }       
}


// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
$movie1 = new Movie("IronMan", "1:20h");
$movie2 = new Movie("IronMan 2", "1:30h");

$movie1->sayMovie();
$movie2-> sayMovie();
?>