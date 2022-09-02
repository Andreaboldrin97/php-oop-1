<?php
class Movie
{
    private $title;
    private $description;
    private $date;
    private $film_company;

    // Creo un costrutto per identificare con sicurezza le variabili d'istanza create

    function __construct($_title, $_description, $_date, $_film_company)
    {
        $this->getTitle($_title);
        $this->getDescription($_description);
        $this->getDate($_date);
        $this->getFilmCompany($_film_company);
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
}
