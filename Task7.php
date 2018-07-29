<?php

$data = [];
$form = new Form('post');
$form ->open();
$form ->addField(new FormField('Last name', 'lname'));
$form ->addField(new EmailFormField('Email', 'email'));
$form ->addField(new PasswordFormField('Password', 'pword'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 7</title>
</head>
<body>
<h2>FORM:</h2>

<?= $form->open() ?>

<?= $form->renderFields() ?>

<button type="submit" name="confirm" value="">Sign Up</button>

<?= $form->close() ?>
</form>
</body>
</html>
