<h3>

<a href="http://localhost/php-10/019/login/">home</a>

<?php if (isset($_SESSION['name'])) : ?>

<a href="http://localhost/php-10/019/login/member.php">member</a>

<form action="http://localhost/php-10/019/login/login.php?logout" method="post">
    <button type="submit">logout from <?= $_SESSION['name'] ?></button>
</form>


<?php else : ?>

<a href="http://localhost/php-10/019/login/login.php">login</a>


<?php endif ?>


<h3>