<?php

session_start();

// POST SCENARIJUS
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $checked = isset($_POST['box']) ? count($_POST['box']) : 0;

    $_SESSION['boxes'] = $checked;
    $_SESSION['all'] = $_POST['all'];

    header('Location: http://localhost/php-10/019/u10.php');
    die;
}

// GET SCENARIJUS

$boxes = $_SESSION['boxes'] ?? null;

$all = $_SESSION['all'] ?? null;

unset($_SESSION['boxes'], $_SESSION['all']);

if ($boxes === null) { // GET 1
    $all = rand(3, 10);
    $cb = array_slice(range('A', 'J'), 0, $all);
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
    <title>U10</title>
</head>

<body style="background:<?= $color ?>; color:crimson; display:flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">

    <?php if ($boxes === null) : ?>
        <form method="POST">
            <?php foreach ($cb as $b) : ?>
                <div style="margin: 5px; font-size: 30px;">
                    <input type="checkbox" name="box[]"><label><?= $b ?></label>
                </div>
                <input type="hidden" name="all" value="<?= $all ?>">
            <?php endforeach ?>
            <button type="submit">GO</button>
        </form>

    <?php else : ?>
        <div>
            <h1>CHECKED: <?= $boxes ?> FROM: <?= $all ?></h1>
            <a href="http://localhost/php-10/019/u10.php">
                <h2>GO TO CHECK</h2>
            </a>
        </div>

    <?php endif ?>

</body>

</html>