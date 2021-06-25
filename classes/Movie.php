<?php

/**
 * Class Movie
 * @author domingo79
 * 
 * @param string $code (codice identificativo)
 * @param string $title (nome del titolo)
 * @param string $post (specificare un url)
 * @param float $price (prezzo)
 * @param string $genre (genere)
 * @param int $duration (durata num intero)
 * @param bool $adult_movie (true o false || 1 o 0 default false)
 * @param float $reating (voto del film)
 * @param int $year (anno 4 cifre)
 * @param string $direction (regia)
 * @param string $desript (descrizione)
 * 
 * @method setSale(int) setta uno sconto
 * @method getSale() restituisce il $price
 * 
 */
class Movie
{
    public $code;
    public $title;
    public $poster;
    public $price;
    public $genre;
    public $duration;
    public $adult_movie = false;
    public $rating;
    public $year;
    public $direction;
    public $descript;

    function __construct(string $code, string $title, string $poster, float $price, string $genre, int $duration, bool $adult_movie, float $rating, int $year, string $direction, string $descript)
    {
        $this->code = $code;
        $this->title = $title;
        $this->poster = $poster;
        $this->price = $price;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->adult_movie = $adult_movie;
        $this->rating = $rating;
        $this->year = $year;
        $this->direction = $direction;
        $this->descript = $descript;
    }

    public function setSale(float $discaunt = null)
    {
        if ($discaunt) {
            $this->price  -= round($this->price * $discaunt / 100, 2);
        }
    }

    public function getSale()
    {
        return $this->price;
    }
}
