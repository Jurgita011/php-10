<?php

// COOKIES - naršyklė gali saugoti iš serverio jai duotus cookies.

// Spausdami ant linko iš naršyklės kartu su requestu issiunčiame ir naršyklės saugomus cookies į serverį.

// Sesija - kol naršyklė neuždaryta (anksčiau). Bet dabar nebeaišku, kaip yra.

// Darom cookie ir jei nepasakom jo galiojimo laiko, tai jis galioja kol vyksta sesija.

// Naršyklėje - Inspekt > Application > Cookies

// Cookio pasetinimas
// setcookie('bebras', 'Bebras plaukia upe');

// Cookio nuskaitymas
// echo $_COOKIE['bebras'];

// Cookio ištrynimas - nėra jokios ištrynimo komandos. Reikia nurodyti cookio galiojimo laiką. Jei nenurodyta - by default session
// setcookie('bebras', 'Bebras plaukia upe', time() + 3600); //galiojimo laikas
// setcookie('bebras', 'Bebras plaukia upe', time() - 3600); // expired, cookies "istrintas"
// setcookie('bebras', 'Bebras plaukia upe', time()); // 0, cookies "istrintas"


// Cookiai naudojami identifikacijai. Patvirtinimui, kad kažkas yra taip, kaip yra. Pvz., Facebook profilis - vartotojas identifikuoja save per vardą ir pavardę. Autentifikacija - patvirtinimas, kad tikrai taip yra (SmartID, mob. parašas).

// Cookies identifikuoja naršyklėje. 

// Cookiai padeda perdavinėti duomenis iš vieno puslapio į kitą per sesijas. Sesijos duomenys laikomi laikyklėje (sesijos mechanizmas) - PHP laiko faile.

// Sesijos mechanizmas - reikia paleisti dar iki echo

session_start();

$_SESSION['ob'] = 'Orange bebras'; // irasome i laikykles faila


unset($_SESSION['ob']); // failo istrynimas is serverio

echo $_SESSION['ob'];