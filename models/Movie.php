<?php
//// Define a 'movie' class and the related request variables

class Movie
{
    public $id;
    public $title;
    public $genres;
    public $director;
    public $plot;
    public $cover;

    //* Define a constructor
    public function __construct($_id, $_title, $_genres, $_director, $_cover)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->genres = $_genres;
        $this->director = $_director;
        $this->cover = $_cover;
    }
    //* Define a method that returns the plot of the film 
    public function getPlot($_plot)
    {
        return $this->plot = $_plot;
    }
    //* Define a method that returns the cover of the film 
    public function getCover($_cover)
    {
        return $this->cover = $_cover;
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
$movie_1 = new Movie(1, 'Snowpiercer', 'Action, science-fiction, drama', 'Bong Joon-ho', 'https://pad.mymovies.it/filmclub/2009/10/179/locandina.jpg');
$plot_1 = 'Durante una nuova era glaciale causata da un esperimento fallito, un gruppo di sopravvissuti viaggia su di un treno speciale che non si ferma mai. Le differenze fra i passeggeri, però, portano presto alla rivolta.';

$movie_1->getPlot($plot_1);
var_dump($movie_1);

//// Instance n.2
$movie_2 = new Movie(2, 'Inception', 'Action, science-fiction, thriller, adventure', 'Christopher Nolan', 'https://m.media-amazon.com/images/I/51bRJ3i-O8L._SY445_.jpg');
$plot_2 = 'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.';

$movie_2->getPlot($plot_2);
var_dump($movie_2);

//// Instance n.3
$movie_3 = new Movie(3, 'In Time', 'Action, science-fiction, thriller', 'Andrew Niccol', 'https://pad.mymovies.it/filmclub/2011/07/182/locandina.jpg');
$plot_3 = 'In un futuro non troppo lontano, il gene dell\'invecchiamento è stato isolato e sconfitto. Per evitare la sovrappopolazione, il tempo è diventato la moneta con cui la gente paga per acquistare i beni.';

$movie_3->getPlot($plot_3);
var_dump($movie_3);

//// Instance n.4
$movie_4 = new Movie(4, 'After Earth', 'Science-fiction, action, adventure', 'M. Night Shyamalan', 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/af6166a0df3623baf2cad076c337132221aa8935056e33d2310b8dde003616c3._RI_V_TTW_.jpg');
$plot_4 = 'Un ranger e suo figlio, provenienti dal pianeta Nova Prime, sono in viaggio con la loro navicella quando vengono costretti ad un atterraggio d\'emergenza sulla Terra, diventata un luogo selvaggio dominato da strane creature.';

$movie_4->getPlot($plot_4);
var_dump($movie_4);
