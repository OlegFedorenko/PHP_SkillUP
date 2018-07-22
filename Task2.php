<?php

$array = ['Kolya'=>200, 'Vasya'=>300, 'Petya'=>400];

foreach ($array as $arr)
{
    echo key($array).' - salary '.$arr.' $'.'<br>';
    next($array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home work 7.2</title>
</head>
<body>
</body>
</html>
