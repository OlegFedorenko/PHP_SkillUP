<?php

if (isset($_COOKIE['ing_count']))
{
    $_COOKIE['ing_count'] = 0;
}
$_COOKIE['ing_count']++;
setcookie('ind_count',$_COOKIE['ing_count'], time()+60*60*24);

echo '<br>'.'*** Task 6 ***'.'<br><br>';

echo "Visits - ".$_COOKIE['ing_count'];

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

