<?php
include __DIR__ .'/actions2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Su</title>
</head>
<body>
<form method="post">

    <p>IF YOU WANT TO SUBSCRIBE US - SEND YOUR EMAIL</p>

    <label>
        Email:
        <input type="email" name="email" value="<?= getValue('email')?>">
        <?= getError('email') ?>
    </label>

    <button type="submit" name="confirm" value="">Sign Up</button>
</form>
</body>
</html>