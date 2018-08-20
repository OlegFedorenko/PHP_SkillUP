<?php



if (isset($_REQUEST['action']))
{
    setcookie("isHide",1, time()+60*60*24*31);
    header('location:Cookies3.php');
    exit();
}

if ($_COOKIE['isHide'] == 0)
{
    echo '<img src="banner.png">';
    echo'<form method="get" action="Cookies3.php">';
    echo'<input type="hidden" name="action" value="1">';
    echo'<input type="submit" value="Hide" >';
    echo'</form>';
}
else
{
    echo '<h3>Banner has been hidden</h3>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hometask Cookies 2</title>
</head>
<body>

</body>
</html>