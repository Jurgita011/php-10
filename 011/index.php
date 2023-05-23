<?php

echo '<pre>';

echo "___TERNARY___";
// TERNARY - Priskiriamoji sąlyga. Bet gali veikti ir be priskyrimo.
// Susideda is salygos ir dvieju reiksmiu, salyga gali buti TRUE arba FALSE

$what = 5 > 4 ? 'nice' : 'cool'; // uz klaustuko TRUE : FALSE
echo "<h1>$what</h1>";

$digit = 5;
5 > 42 ? $digit++ : $digit--; // priskyrimo nera, jei TRUE - pripliusiuos vieneta, jei FALSE - atminusuos vieneta nuo kintamojo $digit
echo "<h1>$digit</h1>";

$what = 5 > 42 ? $digit++ : $digit--; 
echo "<h1>$digit $what</h1>";

$what = 5 > 42 ? 'nice' : (5 > 1 ? 'cool' : 'super'); // nestintas ternary, geriau taip nerasyti, sunkiai skaitomas kodas. Geriau isdelioti i if'a.
echo "<h1>$what</h1>";

echo "<br><br>";


echo "___??___";
// ?? - tikrina, ar kintamasis yra NULL, ima default reiksme po ?? 'kazkas'. Jei ne NULL, ima kintamojo reiksme.

$pirmas = 'Labas';

$hello = $pirmas ?? 'hello';

echo "<h1>$hello</h1>";

var_dump($hello);

echo "<br><br>";


echo "___MATCH___";
// MATCH - operatorius, vienu metu tikrina visus ir priskiria tinkama reiksme.

$letter = 'W';

$animal = match($letter) {
    'W' => 'Wolf',
    'F' => 'Fox',
    'A' => 'Racoon',
    default => 'Rabbit'
};
echo "<h1>$animal</h1>";

echo "<br><br>";


echo "___SWITCH___";
// SWITCH - ciklas, eina per visus ir pasiima atitinkama. Be break, pasiims default. Nereiketu naudoti PHP.

switch($letter) {
    case 'W':
        $animal2 = 'Wolf';
        break;
    case 'F':
        $animal2 = 'Fow';
        break;
    case 'A':
    case 'R':
        $animal2 = 'Racoon';
        break;
    default:
        $animal2 = 'Rabbit';
};
echo "<h1>$animal $animal2</h1>";

// Pvz., patikrinti, kur telpa M dydzio siunta. Jei M - telpa i Medium, Large ir XLarge.
$p = 'M';

switch($p) {
    case 'S': echo "<h1>Small</h1>";
    case 'M': echo "<h1>Medium</h1>";
    case 'L': echo "<h1>Large</h1>";
    default: echo "<h1>X Large</h1>";
};