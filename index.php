<?php

$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','1808');

$sql = "UPDATE users SET email = 'sidorov@email.com' where id=2";
$pdo->exec($sql);

$sql = 'SELECT * from users';
$users = $pdo->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!--WITH FOREACH-->

<!--    <table>-->
<!--        <tr>-->
<!--            <th>ID</th>-->
<!--            <th>First name</th>-->
<!--            <th>Last name</th>-->
<!--            <th>email</th>-->
<!--        </tr>-->
<!--        --><?php //foreach ($users as $user)
//        { ?>
<!--        <tr>-->
<!--            <td>--><?//=$user['id'] ?><!--</td>-->
<!--            <td>--><?//=$user['first_name'] ?><!--</td>-->
<!--            <td>--><?//=$user['last_name'] ?><!--</td>-->
<!--            <td>--><?//=$user['email'] ?><!--</td>-->
<!--        </tr>-->
<!--        --><?php //} ?>
<!--    </table>-->


<!--WITH FETCH-->

    <table>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>email</th>
        </tr>
        <?php while ($user = $users->fetch(PDO::FETCH_ASSOC))
        { ?>
            <tr>
                <td><?=$user['id'] ?></td>
                <td><?=$user['first_name'] ?></td>
                <td><?=$user['last_name'] ?></td>
                <td><?=$user['email'] ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>