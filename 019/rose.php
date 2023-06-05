<?php

define('URL', 'http://localhost/php-10/019/');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: http://vz.lt');
    die;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose</title>
</head>

<body style="background:#F33A6A;">
    <form action="<?= URL ?>pink.php" method="post">
        <button type="submit">GO TO PINK</button>
    </form>
</body>

</html>