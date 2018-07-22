<?php

$result=0;
$array=[1,2,3,4,5];

echo 'ARRAY: ';

foreach ($array as $arr)
{
    $result=$result+$arr*$arr;
    echo $arr;
}
echo '<br>'.'RESULT: ';
echo $result;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home work 7.1</title>
    </head>
    <body>
    </body>
</html>
