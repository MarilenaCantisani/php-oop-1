<?php
//// Define a 'movie' class and the related request variables

class Movie
{
    public $id;
    public $title;
    public $genres;
    public $director;
    public $plot;

    //* Define a constructor
    public function __construct($_id, $_title, $_genres, $_director)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->genres = $_genres;
        $this->director = $_director;
    }
    //* Define a method that returns the plot of the film 
    public function getPlot($_plot)
    {
        return $this->plot = $_plot;
    }
}

/**
 * Creates a new Movie instance
 * @param int $_id;
 * @param string $_title;
 * @param string $_genres;
 * @param string $_director;
 */

//// Instance n.1
$movie_1 = new Movie(1, 'Snowpiercer', 'Action, science-fiction, drama', 'Bong Joon-ho');
$plot_1 = 'Durante una nuova era glaciale causata da un esperimento fallito, un gruppo di sopravvissuti viaggia su di un treno speciale che non si ferma mai. Le differenze fra i passeggeri, però, portano presto alla rivolta.';

$movie_1->getPlot($plot_1);
var_dump($movie_1);
