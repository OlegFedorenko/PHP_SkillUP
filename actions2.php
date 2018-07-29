<?php
error_reporting();
ini_set('display_errors', true);
define('USER_FILENAME', __DIR__.'/subscribe.txt');

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    processRequest();
}

function processRequest()
{
    global $errors, $emailData;

    $fields = ['email'];

    foreach ($fields as $field)
    {

        if( empty($_POST[$field]))
        {
            $errors[$field] = 'Required field!';
        }
        $emailData[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
    }

//    if (mb_strpos($data['email'], '@') === false)
//    {
//        $errors['email'] = 'Invalid email!';
//    }

    if (count($errors) == 0)
    {
        saveEmail();
        header('Location: success2.html');
        exit();
    }
}

function saveEmail()
{
    global $emailData;
    $file = fopen(USER_FILENAME, 'a');
    fputs($file, $emailData."\n");
    fclose($file);
}

function getError($field)
{
    global $errors;
    if(!empty($errors[$field])) //проверяем что ошибка у переданного поля есть
    {
        return'<p class="error">'.$errors[$field].'</p>'; //возвращаем ошибку с тегом р и классом error
    }
    return ''; //возвращаем пустую строку
}

function getValue($field)
{
    global $emailData;
    return isset($emailData[$field]) ? $emailData[$field] :'';
}