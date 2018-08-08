<?php


/** Вывод на экран данных из файла в "приличнорм виде" */

require_once __DIR__.'/init.php';


$users = [];

$file = fopen(USER_FILENAME,'r');

while (!feof($file)) /** Построчный перебор и запись в массив */
{
    $userData = fgets($file);
    $user = unserialize($userData);
    $users[] = $user;

}

fclose($file);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>USERS</title>
</head>
<body>
    <h2>Users</h2>
    <pre>
    <?php var_dump($users) ?>
    </pre>
</body>
</html>