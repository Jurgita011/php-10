<?php

// jei klaseje yra abstraktus metodas, klase turi buti deklaruojama kaip abstrakti
// jei yra interface, ji pridedam i klase su implements ir interface pavadinimu

abstract class AddH1 implements H1, Color
{
    // galima irasyti konstantas - tevinej klaseje esanti konstanta laimi pries vaikinej klasej esancia konstanta
    const COLOR1 = 'blue';

    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    // abstraktus metodas
    abstract function getColor(): string;

    public function print(): void
    {
        echo '<h1 style="color: ' . $this->getColor() . ';">' . $this->text . '</h1>';
    }
}