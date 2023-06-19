<?php

// klases "pavarde" - visada rasoma paciame virsuje
namespace Petras;
// use - atskaitos taskas
use Petras\Super\Fine\Color;

class Coloring extends Color
{
    public function __construct()
    {
        echo 'Coloring class loaded (PETRAS)' . '<br>';
    }
}