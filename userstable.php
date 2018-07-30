<?php
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


$file = file(USER_FILENAME);

$out = array();

foreach ($file as $v)
{
    $out []= explode("\n", $v);
}

var_dump( $out);


?>
<table border="1">

    <?php
    foreach ($out as $v)
    {
        //$tbl.= "<tr><td>".join("</td><td>", $v)."</td></tr>";
        $tbl .= '<tr><td>'.$v.'</td></tr>';
    }
    echo $tbl;
    print $tbl;


    ?>

</table>



</body>
</html>