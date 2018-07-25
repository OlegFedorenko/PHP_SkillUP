<?php
include __DIR__.'/actions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <title>Registration</title>
    </head>
    <body>
    <form method="post">
        <label>
            First Name:
            <input name="fname" value="<?= getValue('fname')?>">
            <?= getError('fname') ?>
        </label>

        <label>
            Last Name:
            <input name="lname" value="<?= getValue('lname')?>">
            <?= getError('lname') ?>
        </label>

        <label>
            Email:
            <input type="email" name="email" value="<?= getValue('email')?>">
            <?= getError('email') ?>
        </label>

        <label>
            Password:
            <input type="pword" name="pword" value="">
            <?= getError('pword') ?>
        </label>

        <button type="submit" name="confirm" value="">Sign Up</button>
    </form>
    </body>
</html>
