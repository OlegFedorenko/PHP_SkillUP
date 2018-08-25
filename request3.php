<?php

require_once __DIR__.'/init.php';

$sql3 = 'select u.id, u.name, count(u.id) oeders
from users u join orders o on u.id = o.user_id
where status = 1
group by u.id;';
$users3 = $pdo->query($sql3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request 3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>3. Выбрать Id, имя, и кол-во заказов всех пользователей из таблицы<br>
        users, у которых 3 и больше записей поля status = 1 в таблице orders</h3>
    <table>
        <tr>
            <th>USER ID</th>
            <th>USER NAME</th>
            <th>ORDERS</th>
        </tr>
        <?php while ($user = $users3->fetch(PDO::FETCH_ASSOC))
        {
            if ($user['oeders'] >= 3){
                ?>
                <tr>
                    <td><?=$user['id'] ?></td>
                    <td><?=$user['name'] ?></td>
                    <td><?=$user['oeders'] ?></td>
                </tr>
            <?php }} ?>
    </table>
    <br>
    <form action="index.php">
        <input type="submit" value="Back">
    </form>
</body>
</html>