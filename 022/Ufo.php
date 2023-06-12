<?php

// Objektinis programavimas: vienai klasei - vienas failas,  klases vardas is didziosios, failo pavadinimas kaip klases pavadinimas

// Objekto viduje - kintamasis, objekto savybe. Funkcija - klases kontekste vadinama metodu.

// Deklaruojant kintamaji, reikia pasakyti, kokio matomumo (lygio) jis yra: public, protected ar private.
// Funkcijos turi ta pati matomuma kaip ir kintamieji.

// public - visiems laisvai prieinama (pvz., dezute guli namo kieme) - - Rodo kieme (index.php)
// protected - prieinama tik tam tikram ratui (pvz., dezute yra namo bute)
// private - prieinama tik su leidimu (pvz., dezute guli seife, kuri gali atrakinti tik su raktu) - Nerodo kieme (index.php)-Fatal error

// Private ir protected savybems nuskaityti naudojami magic metodai - leidzia nuskaityti, bet nekeisti https://www.php.net/manual/en/language.oop5.magic.php
//Petras
class Ufo
{

    // Savybe. Savybes deklaracija
    public $speed;

    //private $destination = 'Moon';


    private $destination;
    // construct stebuklingas metodas - pasileidzia pats, kai kuriame nauja objekta
    public function __construct($where, $speed = 5)
    {
        $this->destination = $where;
        $this->speed = $speed;
    }


    // destruct stebuklingas metodas - pasileidzia tada, kai objektas nustoja egzistuoti atmintyje. Kai baigiasi scriptas, die
    public function __destruct()
    {
        echo '<h1>UFO GONE</h1>';
    }

    // get stebuklingas metodas - leidzia nuskaityti kintamaji
    public function __get($prop)
    {
        return $this->$prop;

        /*
        if ($prop == 'bebras') {
            return 'Bebro nėra, bet yra Zebras';
        }
        
        if ($prop == 'destination') {
            return $this->destination;
        }
        */

        //echo "<h1>$prop</h1>";
    }

    // set stebuklingas metodas - leidzia irasyti i kintamaji. Ka norim ir kur norim irasyti. Su if darom validacija, ka galima irasyti
    public function __set($prop, $what)
    {
        if (in_array($what, ['Moon', 'Mars', 'Pluto'])) {
            $this->$prop = $what;
        }
    }

    /*
    public function where() : string
    {
        return $this->destination;
    }
    */

    // Funkcija - metodas
    private function whatTime(): string // kintamojo tipas - reikia nurodyti, ka grazina metodas. Gali buti string, array, int.... Del klaidu paiesku labai gerai
    {
        return date('i:s');
    }

    public function turbo(): int
    {
        return $this->speed * 3; // $this - jei nori kazka pasiekti tame objekte, rasome $this
    }


    public function whatTimeBig(): string
    {
        return '<h1>' . $this->whatTime() . '</h1>';
    }
}