<?php

require __DIR__ . '/Tevas.php'; // tevine klase
require __DIR__ . '/Ieva.php'; // trait
require __DIR__ . '/Kleopatra.php'; // trait
require __DIR__ . '/Vaikas.php'; // vaikine klase


/* Autoloaderis

spl_autoload_register(function ($class) {

    echo $class . ' 1<br>';

});

spl_autoload_register(function ($class) {

    echo $class . ' 2<br>';

});

spl_autoload_register(function ($class) {

    echo $class . ' 3<br>';

    require __DIR__ . '/' . $class . '.php';

});
*/


$vaikas = new Vaikas;

$vaikas->fun();
$vaikas->funI();
$vaikas->funK();