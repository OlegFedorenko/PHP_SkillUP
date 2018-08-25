<?php

require_once __DIR__.'/init.php';

$sql1 = 'select o.id, u.name
from users u join orders o on u.id = o.user_id
where o.status = 0
order by o.id;';
$users1 = $pdo->query($sql1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>1. Выбрать Id заказа и соответствующих пользователей из таблицы <br>
        users, у которых записи в таблице orders имеют status = 0</h3>
    <table>
        <tr>
            <th>ORDER ID</th>
            <th>USER NAME</th>
        </tr>
        <?php while ($user = $users1->fetch(PDO::FETCH_ASSOC))
        { ?>
            <tr>
                <td><?=$user['id'] ?></td>
                <td><?=$user['name'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <form action="index.php">
        <input type="submit" value="Back">
    </form>
</body>
</html>