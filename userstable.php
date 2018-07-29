<?php
//include __DIR__.'actions.php';
define('USER_FILENAME', __DIR__.'/users.txt');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php


//$file = fopen(USER_FILENAME, "r");

$out = array();

foreach (file(USER_FILENAME) as $v)
{
    $out = explode("\t", $v);//."\n";
    //echo $out.'<br>';
    var_dump($out);
}

$tbl = '<table>';
foreach ($out as $v)
{
    $tbl.= "<tr><td>".join("</td><td>", $v)."</td></tr>";
}
$tbl.= '</table>';
echo $tbl;

//fclose($file);

?>

</body>
</html>