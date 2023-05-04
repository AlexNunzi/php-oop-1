<?php

$Fantascienza = new Genre("Fantascienza", " Nei film di fantascienza, il meccanismo narrativo viene innescato dalla presenza di elementi scientifici immaginari o ipotetici, come potrebbero essere ad esempio la formulazione di una nuova teoria matematica, l'invenzione di apparecchiature tecnologiche innovative o la scoperta di nuovi e promettenti sviluppi nel campo della bioingegneria.");
$Avventura = new Genre("Avventura", "Un film d'avventura è un genere di film che rispecchia un mondo eroico di battaglie e avventure. In questo genere tendono a dominare l'azione e i valori cavallereschi.");
$Azione = new Genre("Azione", "Il film d'azione è un genere cinematografico in cui la trama viene sostanzialmente raccontata per mezzo di un certo numero di scene d'azione, durante le quali uno o più protagonisti si trovano a dover affrontare una serie di sfide che richiedono coraggio e prodezza fisica.");

$Guerre_stellari = new Movie("Star Wars: Episodio IV - Una nuova speranza", [$Fantascienza, $Avventura, $Azione]);
$Guerre_stellari->release_date = "25-05-1977";
$Guerre_stellari->director = "George Lucas";
$Guerre_stellari->screenwriter = "George Lucas";

$Guerre_stellari_La_Minaccia_Fantasma = new Movie("Star Wars: Episodio I - La minaccia fantasma", [$Fantascienza, $Avventura, $Azione]);
$Guerre_stellari_La_Minaccia_Fantasma->release_date = "19-05-1999";
$Guerre_stellari_La_Minaccia_Fantasma->director = "George Lucas";
$Guerre_stellari_La_Minaccia_Fantasma->screenwriter = "George Lucas";