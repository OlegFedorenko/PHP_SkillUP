<?php

$array = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday','Friday', 'Saturday'];
$day = date('w');

foreach ($array as $arr)
{
    If (key($array) == $day)
    {
        echo '<i>'.$arr.'</i>'.'<br>';
    }
    else
    {
        echo $arr.'<br>';
    }
    next($array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home work 7.3</title>
</head>
<body>
</body>
</html>

