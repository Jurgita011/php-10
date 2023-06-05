<?php

session_start();

// POST SCENARIJUS
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $checked = isset($_POST['box']) ? count($_POST['box']) : 0;

    $_SESSION['boxes'] = $checked;

    header('Location: http://localhost/php-10/019/u9.php');
    die;
}

// GET SCENARIJUS

$boxes = $_SESSION['boxes'] ?? null;

unset($_SESSION['boxes']);

if ($boxes === null) { // GET 1
    $cb = array_slice(range('A', 'J'), 0, rand(3, 10));
    $color = 'black';
} else {   // GET 2
    $color = 'white';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U9</title>
</head>

<body style="background:<?= $color ?>; color:crimson; display:flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">

    <?php if ($boxes === null) : ?>
        <form method="POST">
            <?php foreach ($cb as $b) : ?>
                <div style="margin: 5px; font-size: 30px;">
                    <input type="checkbox" name="box[]"><label><?= $b ?></label>
                </div>
            <?php endforeach ?>
            <button type="submit">GO</button>
        </form>

    <?php else : ?>
        <h1>CHECKED: <?= $boxes ?></h1>
        <a href="http://localhost/php-10/019/u9.php">
            <h2>GO TO CHECK</h2>
        </a>

    <?php endif ?>

</body>

</html>