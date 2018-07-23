<?php

$baseArray = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];

foreach ($baseArray as $bArr)
{
    $enArray[]=key($baseArray);
    $ruArray[]=$bArr;
    next($baseArray);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home work 7.2</title>
</head>
<body>
<br>
<?php var_dump($baseArray)?>
<br><br>
<?php foreach ($enArray as $bArr) {echo $bArr.' ';} ?>
<br><br>
<?php foreach ($ruArray as $bArr) {echo $bArr.' ';} ?>
</body>
</html>

