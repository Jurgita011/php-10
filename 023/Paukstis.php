<?php

class Paukstis {

    // $name, $age - kintamuju savybes
    public $name, $age;
    
    // $name, $age - argumentai, kurie ateina i funkcija
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function fly() : void
    {
        echo '<h1>' . $this->name . ' Skrenda skrenda</h1>';
    }

    public function getArea() : string
    {
        return 'Miško dydis yra: ' . rand(10, 99);
    }
    
}