<?php

//Ona
echo '<pre>';
// Objektinis programavimas: vienai klasei - vienas failas,  klases vardas is didziosios, failo pavadinimas kaip klases pavadinimas

// Klase pasiimam is failo
require __DIR__ . '/Ufo.php';

// Kuriame objekta - kintamajame pasigaminame nauja klase
$ufo1 = new Ufo('Jupiter');
$ufo2 = new Ufo('Alfa Centauri', 55585658565255);

// unset($ufo2);

// Priskyrimas - perdavimas pagal referensa, nesukuria naujo objekto
// $ufo3 = $ufo1;

// Objekto kopijavimas - kol kas nenaudosime, advanced funkcija
// $ufo3 = clone($ufo1);

// Savybe galime pakeisti
// Kintamojo savybe - nedeti $
// $ufo1->speed = 17;
echo '<br>';

// Isspausdina savybe
//echo $ufo1->speed;
//echo '<br>';
//echo $ufo2->whatTimeBig();
//echo '<br>';
//echo $ufo1->turbo();
//echo '<br>';
//echo $ufo2->turbo();
//echo '<br>';

//echo $ufo1->destination;
//echo '<br>';

//echo $ufo1->destination = 'Mars';
echo '<br>';

// echo $ufo2->bebras;
echo '<br>';

//echo $ufo1->where();

// Atspausdina php sukurta objekta
var_dump($ufo1); 
var_dump($ufo2);