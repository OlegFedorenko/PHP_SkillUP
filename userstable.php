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

    $out[]= explode("\t", $v);
}


?>
<table border="1">

    <?php foreach ($out as $user) { ?>
        <tr>
            <?php foreach ($user as $field) { ?>
                <td><?= $field ?></td>
            <?php } ?>
        </tr>
    <?php } ?>


</table>

</body>
</html>