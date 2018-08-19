<?php

setcookie("isHide",$isHide);

if (isset($_REQUEST['action']))
{
    $_COOKIE['isHide'] = 1;
}

if ($_COOKIE['isHide'] == 0)
{
    echo '<img src="banner.png">';
}
else
{
    echo 'Banner hss been hidden';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hometask Cookies 2</title>
</head>
<body>
<form method="get" action="Cookies3.php">
    <input type="submit" value="Hide" >
</form>
</body>
</html>