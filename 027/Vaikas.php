<?php

// trait - https://www.php.net/manual/en/language.oop5.traits.php

class Vaikas extends Tevas
{
    // trait'ai iskvieciami su use
    use Kleopatra, Ieva {
        // konfliktams spresti - insteadof
        // Kleopatra::fun insteadof Ieva;

        Kleopatra::fun as funK;
        Ieva::fun as funI;
    }

    // savybiu su trait'ais neperrasysi
    public $dog='Rex';

    public function fun()
    {
        echo '<h1>I like Tik-Tok (14+)</h1>';
    }
}