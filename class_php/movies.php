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
        $this->setTitle($_title);
        $this->setDescription($_description);
        $this->setDate($_date);
        $this->setFilmCompany($_film_company);
        $this->setFilmPoster($_film_poster);
    }

    // Creo i method per le assegnazioni delle variabili d'istanza le creo con il setter in modo da impostarle 

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function setFilmCompany($film_company)
    {
        $this->film_company = $film_company;
    }
    public function setFilmPoster($film_poster)
    {
        $this->film_poster = $film_poster;
    }


    // Creo i method per ottenere le variabili d'istanza con il metodo getter
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
