<?php

// WEB MECHANIKA - bendrauja serveris ir naršyklė

// Naršyklėje paspaudus ant link'o, Browser'is išsiunčia stringą - Request (susideda iš Header ir Body) į serverį, ir gauna atgal stringą - Response (susideda iš Header ir Body). Puslapis parodomas. 

// Atitikmuo laiškui - tekstas su Headeriu (pavadinimas) ir Body (turinys). Nemaišyti su HTML head, body.

// Naršyklėje galima pasižiūrėti - Inspect > Network > Linkas > Headers : General, Response Headers, Request Headers.

// Pirma tuščia eilutė - skirtumas tarp Header ir Body. Automatiškai sugeneruojama serveryje. Reikia žinoti, kaip spausdinti tinkamai.

// Headeriui spausdinti - funkcija header https://www.php.net/manual/en/function.header.php

// Body spausdinti - echo.

// Header - turi aiškią struktūrą. Header svarbu - Content-Type - būtina nurodyti bodyje, koks failas. Pvz. paveikslėliams, image/jpeg.

// Vienas request skirtas vienam konkrečiam Content-Type. Pvz., puslapis su paveiksliuku, vienas request - HMTL, kitas - paveiksliukui.

// Request header - svarbu: URL, Method GET (duok iš info serverio).

// Prisiloginimas į kažkokį puslapį: Request header - URL, Method POST (išsiųsk info į serverį).

// Request neveiks be: URL, Method, Status Code.



$file = file_get_contents(__DIR__. '/wallpaper--009.jpg');

header('Content-Type: image/jpeg');

http_response_code(400);

echo $file;
?>