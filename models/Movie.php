<?php
class Movie {
    public $name;
    public $genres;
    public $release_date = "Unknown";
    public $director = "Unknown";
    public $screenwriter = "Unknown";

    public function __construct($_name, array $_genres){
        $this->name = $_name;
        $this->genres = $_genres;
        // Restituisco errore nel caso in cui nell'array $_genres fossero presenti elementi che non siano istanze della classe Genre
        foreach($this->genres as $genre){
            if(!$genre instanceof Genre){
                echo 'Ogni genere deve essere una istanza della classe Genre!';
                die();
            }
        }
    }
    
    // Metodo che restituisce il codice html contenente le informazioni dell'istanza di Movie
    public function getListFilmInfo(){
        $genresList = '';

        foreach($this->genres as $i => $genre){
            $genresList .= $genre->name;
            if($i < (count($this->genres) - 1)){
                $genresList .= ', ';
            }
        }

        return  '<ul class="border border-black rounded-3 mb-1 p-3 list-unstyled h-100">
                    <li>Titolo del film: ' . $this->name .'</li>
                    <li>Genere del film: ' . $genresList .'</li>
                    <li>Data di rilascio: ' . $this->release_date .'</li>
                    <li>Regista: ' . $this->director .'</li>
                    <li>Sceneggiatore: ' . $this->screenwriter .'</li>
                </ul>';
    }
}