<?php
//// Define a 'movie' class and the related request variables

class Movie
{
    public $id;
    public $title;
    public $genre;
    public $director;
    public $plot;

    //* Define a constructor
    public function __construct($_id, $_title, $_genre, $_director, $_plot)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->plot = $_plot;
    }
}
