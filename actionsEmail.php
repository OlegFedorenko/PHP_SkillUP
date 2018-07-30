<?php
error_reporting();
ini_set('display_errors', true);
define('USER_FILENAME', __DIR__.'/subscribe.txt');

$errors = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    processRequest();
}

function processRequest()
{
    global $errors, $data;

    if( empty($_POST['email']))
    {
        return $errors = true;
    }

    $data = isset($_POST['email']) ? $_POST['email'] : ''; //

    if (!$errors)
    {
        saveEmail();
        header('Location: success2.html');
        exit();
    }
}

function getEmail($email)
//function getEmail($data)
{
    global $data;
    //return isset($data[$email]) ? $data[$email] :'';
    return isset($email) ? $data :'';
    //return isset($data) ? $data :'';
}

function getError()
{
    global $errors;
    if($errors) //проверяем что ошибка у переданного поля есть
    {
        return '<p class="error">Please enter email!</p>'; //возвращаем ошибку с тегом р и классом error
    }
    return ''; //возвращаем пустую строку
}

function saveEmail()
{
    global $data;
    $ff = fopen(USER_FILENAME, 'a');
    fputs($ff, $data."\n");
    fclose($ff);
}