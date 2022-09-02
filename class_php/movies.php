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
        $this->title = $_title;
        $this->description = $_description;
        $this->date = $_date;
        $this->film_company = $_film_company;
    }
}
