<?php

require_once __DIR__.'/init.php';

$sql2 = 'select distinct u.id, u.name
from users u join orders o on u.id = o.user_id
where o.status = 0
order by u.id;';
$users2 = $pdo->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request 2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>2. Выбрать пользователей у которых есть невыполненные заказы, status = 0</h3>
    <table>
        <tr>
            <th>USER ID</th>
            <th>USER NAME</th>
        </tr>
        <?php while ($user = $users2->fetch(PDO::FETCH_ASSOC))
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