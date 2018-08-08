<?php
error_reporting();
ini_set('display_errors', true);

require_once __DIR__.'/classes/Form.php';
require_once __DIR__.'/classes/SmartForm.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>HW try 5</title>
</head>
<body>
<h1> F O R M </h1>
<?php
    $form = new Form();

    $smart = new SmartForm();

    echo $form->open(['action'=>'index.php', 'method'=>'post']);

    echo $form->input('Name old', ['type'=>'text', 'name'=>'name', 'value'=>'']);

    echo $smart->input2('Name smart', ['type'=>'text', 'name'=>'name', 'value'=>'']);

    echo $form->password('Password', ['type'=>'password', 'name'=>'pword', 'value'=>'']);

    echo $form->textarea('Comment', ['name'=>'comment', 'cols'=>'20', 'rows'=>'3', 'value'=> '']);

    echo $form->submit('', ['type'=>'submit', 'name'=>'sub', 'value'=>'Send form']);

    $form->close();
?>
</body>
</html>