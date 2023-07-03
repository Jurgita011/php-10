<?php

$host = 'localhost';
$db   = 'zuikis';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

// SELECT column1, column2, ...
// FROM table_name;
// JOIN budai - duombaze apie juos nezino.
// Duombazeje reikia sujungti papildomai norimas lenteles. Nesujungs, jei yra vaikas be tevo, pvz. tel. nr. (vaikas) be kliento (tevas). Klientas (tevas) gali buti be tel. nr. (vaikas). Jungiant pasirenkame vaikineje lenteleje (phone), ka jungsime: > Stucture > Relation view > Column: client_id > Database: studies > Table: clients > Column: id
// Rysi galima pasiziureti > Duombaze > Designer > Rodo rysi - clients id su phone client_id

// INNER JOIN
$sql = "
    SELECT c.id, name, number
    FROM clients AS c
    INNER JOIN phones AS p
    ON c.id = p.client_id
";
// pervadiname lenteles, sutrumpiname
// ON - taisykle, kaip apjungti DB lenteles
// SELECT * - su zvaigzdute reiskia ALL
// SELECT - nurodom, kas is kur paimta.
$stmt = $pdo->query($sql);//DB steitmentas
$clients = $stmt->fetchAll();//visko istraukimas
?>
<h1>INNER JOIN</h1>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>phone</th>
    </tr>
    <?php foreach($clients as $client) : ?>
    <tr>
        <td><?php echo $client['id'] ?></td>
        <td><?php echo $client['name'] ?></td>
        <td><?php echo $client['number'] ?></td>
    </tr>
    <?php endforeach ?>
</table>
<?php

// LEFT JOIN

$sql = "
    SELECT c.id, name, number
    FROM clients AS c
    LEFT JOIN phones AS p
    ON c.id = p.client_id
";
$stmt = $pdo->query($sql);
$clients = $stmt->fetchAll();
?>

<h1>LEFT JOIN</h1>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>phone</th>
    </tr>
    <?php foreach($clients as $client) : ?>
    <tr>
        <td><?php echo $client['id'] ?></td>
        <td><?php echo $client['name'] ?></td>
        <td><?php echo $client['number'] ?></td>
    </tr>
    <?php endforeach ?>
</table>
<?php

// RIGHT JOIN

    $sql = "
    SELECT c.id, name, number
    FROM clients AS c
    RIGHT JOIN phones AS p
    ON c.id = p.client_id
";
$stmt = $pdo->query($sql);
$clients = $stmt->fetchAll();
?>
<h1>RIGHT JOIN</h1>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>phone</th>
    </tr>
    <?php foreach($clients as $client) : ?>
    <tr>
        <td><?php echo $client['id'] ?></td>
        <td><?php echo $client['name'] ?></td>
        <td><?php echo $client['number'] ?></td>
    </tr>
    <?php endforeach ?>
</table>