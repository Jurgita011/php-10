<?php

define('URL', 'http://localhost/php-10/019/');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink</title>
</head>

<body style="background:pink;">
    <form action="<?= URL ?>rose.php" method="post">
        <button type="submit">GO TO ROSE</button>
    </form>
</body>

</html>