<?php

// abstrakcija aprasyta atskiroje klaseje

class H1WithRandomColor extends AddH1 implements H1, Color {

    // galima irasyti konstantas - tevinej klaseje esanti konstanta laimi pries vaikinej klasej esancia konstanta
    const COLOR1 = 'black';

    public function getColor(): string
    {
        return 'rgb(' .rand(0, 255) . ',' .rand(0, 255) . ','.rand(0, 255) . ')';
    }
}