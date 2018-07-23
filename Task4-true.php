<?php

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];

$ru=[];
$en=[];

foreach ($arr as $key => $value)
{
    $ru[]=$value;
    $en[]=$key;
}

var_dump($ru);
'<br>';
var_dump($en);

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