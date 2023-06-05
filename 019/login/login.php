<?php

session_start();

// Method POST - duomenu irasymas
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $users = file_get_contents(__DIR__ . '/users.json');
    $users = json_decode($users, 1);
    foreach ($users as $user) {
        if ($user['name'] == $_POST['name'] && $user['psw'] == md5($_POST['psw'])) {
            $_SESSION['name'] = $user['name'];
            header('Location: http://localhost/php-10/019/login/member.php');
            die;
        }
    }
    $_SESSION['error'] = 'Invalid password or user name';
    header('Location: http://localhost/php-10/019/login/login.php');
    die;
}

// Method GET - puslapio spausdinimas

// error zinute
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
} else {
    $error = '';
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>Login Page</h1>

    <h2>
        <a href="http://localhost/php-10/019/login/">Home</a>
    </h2>

    <?php if ($error) : ?>
        <h3 style="color:crimson;"><?= $error ?></h3>
    <?php endif ?>

    <form method="post">
        <div>
            Name <input type="text" name="name">
        </div>
        <div>
            Password <input type="text" name="psw">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>

</html>