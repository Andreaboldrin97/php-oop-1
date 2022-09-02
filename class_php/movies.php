<?php
class Movie
{
    private $title;
    private $description;
    private $date;
    private $film_company;
    private $film_poster;

    // Creo un costrutto per identificare con sicurezza le variabili d'istanza create

    function __construct($_title, $_description, $_date, $_film_company, $_film_poster)
    {
        // Creo le assegnazioni da fare
        $this->title = $_title;
        $this->description = $_description;
        $this->date = $_date;
        $this->film_company = $_film_company;
        $this->film_poster = $_film_poster;
    }

    // Creo i method per le assegnazioni delle variabili d'istanza

    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getFilmCompany()
    {
        return $this->film_company;
    }
    public function getFilmPoster()
    {
        return $this->film_poster;
    }
}
