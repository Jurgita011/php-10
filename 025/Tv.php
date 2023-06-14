<?php


class TV
{
    // static - turi buti auksciau, pirmas static, nors reiksmes kodavimui neturi. Skaitymui geriau.

    // static savybe - yra klases dalis, neiseina savaime i objekta. Nereikia kurti objekto, galima tiesiai matyti reiksme
    static public $price = '458eur';

    public $maker = 'Samsung';

    // static metodas/funkcija - iskvieciama klases kontekste
    static public function discount(): void
    {
        // $this->maker = 'Tauras'; // nesamone - turedami static dalykus, omeny neturime konkretaus objekto, todel negalime sakyti sitas $this. Kai suplanuojame kazka konkreciai, tuomet $this
        self::$price = rand(50, 200) . 'eur';
    }

    public function whatPrice(): void
    {
        // norint nuskaityti static reiksme, reikia naudoti self
        echo '<h1>' . self::$price . '</h1>';
    }

    public function changePrice(): void
    {
        self::$price = rand(300, 800) . 'eur';
    }
}