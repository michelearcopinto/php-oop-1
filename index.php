<?php

// uela

class MovieTheater
{
    public $street;
    public $city;
    public $postcode;


    public function __construct($_street, $_city, $_postcode)
    {
        $this->street = $_street;
        $this->city = $_city;
        $this->postcode = $_postcode;
    }

    public static function isOpen()
    {
        return "La struttura è aperta oggi";
    }
}

class Movie
{
    public $titolo;
    public $regista;
    public $anno;
    public $genere;
    public static $is_available;
    public $address;

    public function __construct($_titolo, $_regista, $_anno, $_genere, $_is_available, MovieTheater $_address)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->genere = $_genere;
        self::$is_available = $_is_available;
        $this->address = $_address;
    }

    public function isAvailable()
    {
        if (self::$is_available === true) {
            return "Il film: '{$this->titolo}' è disponibile";
        } else {
            return "Il film: '{$this->titolo}' NON è disponibile";
        }
    }
}


$movie = new Movie("Ritorno al futuro", "Robert Zemeckis", 1985, "Fantascienza, Commedia", true, new MovieTheater("Via Roma 12", "Roma", "00184"));

var_dump($movie);
echo MovieTheater::isOpen() . "<br>";
echo $movie->isAvailable();


$movie2 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994, "Drammatico", false, new MovieTheater("Corso Vittorio Emanuele 10", "Milano", "20122"));

var_dump($movie2);
echo MovieTheater::isOpen() . "<br>";
echo $movie2->isAvailable();
