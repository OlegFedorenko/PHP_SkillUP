<?php
require_once __DIR__.'/actions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>

    <?= $form->renderBegin() ?>

        <?= $form->renderFields() ?>

        <button type="submit" name="confirm" value="">Sign Up</button>

    <?= $form->renderEnd() ?>
</form>
</body>
</html>
