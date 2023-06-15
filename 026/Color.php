<?php

// Interface - planas, kaip viskas atrodys. Isorine dalis - vien tik public dalykai. Metodai, galima irasyti konstantas.

interface Color
{
    const COLOR = 'red';

    function getColor(): string;
}