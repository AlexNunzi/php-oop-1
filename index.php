<?php

class Movie {
    public $name;
    public $genre;
    public $release_date = "Unknown";
    public $director = "Unknown";
    public $screenwriter = "Unknown";

    public function __construct($_name, $_genre){
        $this->name = $_name;
        $this->genre = $_genre;
    }

    public function getListFilmInfo(){
        return  '<ul>
                    <li>Titolo del film: ' . $this->name .'</li>
                    <li>Genere del film: ' . $this->genre .'</li>
                    <li>Data di rilascio: ' . $this->release_date .'</li>
                    <li>Regista: ' . $this->director .'</li>
                    <li>Sceneggiatore: ' . $this->screenwriter .'</li>
                </ul>';
    }
}

$Guerre_stellari = new Movie("Star Wars: Episodio IV - Una nuova speranza", "fantascienza");
$Guerre_stellari->release_date = "25-05-1977";
$Guerre_stellari->director = "George Lucas";
$Guerre_stellari->screenwriter = "George Lucas";

$Guerre_stellari_La_Minaccia_Fantasma = new Movie("Star Wars: Episodio I - La minaccia fantasma", "Fantascienza");
$Guerre_stellari_La_Minaccia_Fantasma->release_date = "19-05-1999";
$Guerre_stellari_La_Minaccia_Fantasma->director = "George Lucas";
$Guerre_stellari_La_Minaccia_Fantasma->screenwriter = "George Lucas";

echo $Guerre_stellari->getListFilmInfo();
echo $Guerre_stellari_La_Minaccia_Fantasma->getListFilmInfo();
