<?php

//setcookie('test', 'value', strtotime('+3 days'),'/')

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add':
            setcookie($_GET['name'], $_GET['value'], strtotime('+10 sec'), '/');
            break;

        case 'delete':
            setcookie($_GET['name'], null, strtotime('-1 sec'), '/');
            break;
    }

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Coockie values</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Value</th>
            <th>Delete?</th>
        </tr>
        <?php foreach ($_COOKIE as $name => $value)
        { ?>
        <tr>
            <td><?=$name?></td>
            <td><?=$value?></td>
            <td><a href="index.php?action=delete&name=<?=urlencode($name)?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>

    <form method="get"> <br>
        <label>Name <input name="name"></label><br>
        <label>Value <input name="value"></label><br>
        <button type="submit">ADD</button>
        <input type="hidden" name="action" value="add">
    </form>
</body>
</html>