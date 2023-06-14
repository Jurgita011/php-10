<?php

// static - neprieiname prie konkretaus objekto. Naudojama, kai mums reikia kazko bendro tarp visu tos rusies objektu. Pvz. choras ir choristai - static kintamasis - choro pavadinimas, kintamieji - choristai.

require __DIR__ . '/TV.php';

echo '<pre>';

// static savybe -  rasom klase :: ir savybes pavadinima su $
echo TV::$price;

echo '<br>';

$tv1 = new TV;
$tv2 = new TV;

$tv1->changePrice();

// static funkcija - rasom klase :: ir funkcijos pavadinima
TV::discount();

$tv1->whatPrice();
$tv2->whatPrice();

var_dump($tv1);
var_dump($tv2);

echo '<br>';