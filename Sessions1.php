<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Hometask Sessions 1</title>
</head>
<body>
<form method="get">
    <?= '<br>'.'*** Task 3 ***'.'<br><br>';?>
    <input type="text", name="email">
    <input type="submit">
</form>
<?php
    if (!empty($_REQUEST['email']))
    {
        session_start();

        $_SESSION['email'] = $_REQUEST['email'];
    }
    else
    {
        echo '<a style="color: crimson">You have entered nothing!</a>'.'<br><br>';
    }
?>
<a href="Sessions2.php">Check phone number</a>
</body>
</html>
