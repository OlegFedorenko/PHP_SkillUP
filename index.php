<?php

require_once __DIR__.'/init.php';

$sql01 = 'select *
from users;';
$users01 = $pdo->query($sql01);

$sql02 = 'select *
from orders;';
$users02 = $pdo->query($sql02);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Task 14
    </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h4>Tables:</h4>

    <h5>users</h5>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
        <?php while ($user = $users01->fetch(PDO::FETCH_ASSOC))
        { ?>
            <tr>
                <td><?=$user['id'] ?></td>
                <td><?=$user['name'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <h5>orders</h5>
    <table>
        <tr>
            <th>id</th>
            <th>user_id</th>
            <th>status</th>
        </tr>
        <?php while ($user = $users02->fetch(PDO::FETCH_ASSOC))
        { ?>
            <tr>
                <td><?=$user['id'] ?></td>
                <td><?=$user['user_id'] ?></td>
                <td><?=$user['status'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <h4>Tasks:</h4>
    <p><a href="request1.php">1. Выбрать Id заказа и соответствующих пользователей из таблицы <br>
        users, у которых записи в таблице orders имеют status = 0</a></p>

    <p><a href="request2.php">2. Выбрать пользователей у которых есть невыполненные заказы, status = 0</a></p>

    <p><a href="request3.php">3. Выбрать Id, имя, и кол-во заказов всех пользователей из таблицы<br>
            users, у которых 3 и больше записей поля status = 1 в таблице orders</a></p>
</body>
</html>
