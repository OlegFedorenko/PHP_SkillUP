<?php
if (isset($_COOKIE['counter']))
{
    $counter = $_COOKIE['counter'];
}
else
{
    $counter = 0;
}
$counter++;
setcookie("counter",$counter, time()+7*24*60*60);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hometask Cookies 2</title>
</head>
<body>
<?='<br>'.'*** Task 6 ***'.'<br><br>';?>
<?= 'You have visited this page '.$counter.' times' ?>
</body>
</html>

