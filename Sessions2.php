<?php
session_start();

if (!empty($_SESSION['email']))
{
    $email = $_SESSION['email'];
}
else
{
    $email = '';
}

if (!isset($_SESSION['counter']))
{
    $_SESSION['counter'] = 1;
}
else
{
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Hometask Sessions 2</title>
</head>
<body>
    <form method="get">
        <?= '<br>'.'*** Task 3 ***'.'<br><br>';?>
        <input type="text" name="fname" placeholder="First name"> <br><br>
        <input type="text" name="lname" placeholder="Last name"> <br><br>
        <input type="password" name="pword" placeholder="Password"> <br><br>
        <input type="text" name="email" value = "<?= $email?>"> <br><br>
        <input type="submit" disabled> <br> <br>
    </form>

    <?= '<br>'.'*** Task 4 ***'.'<br>';?>

    <h3>Please, refresh the page!</h3>
    <a style="color: blue"><?= 'The page has been refreshed '.$_SESSION['counter'].' times'; ?></a>
</body>
</html>