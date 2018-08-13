<?php

session_save_path(__DIR__);

session_start();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add':
            $_SESSION[$_GET['name']] = $_GET['value'];
            break;

        case 'delete':
            unset($_SESSION[$_GET['name']]);
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
    <h1>Sessions values</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Value</th>
            <th>Delete?</th>
        </tr>
        <?php foreach ($_SESSION as $name => $value)
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