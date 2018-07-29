<?php
error_reporting();
ini_set('display_errors', true);
define('USER_FILENAME', __DIR__.'/users.txt');

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    processRequest();
}

function processRequest()
{
    global $errors, $data;
    $fields = ['fname', 'lname', 'email', 'pword'];

    foreach ($fields as $field)
    {

        if( empty($_POST[$field]))
        {
            $errors[$field] = 'Required field!';
        }
        $data[$field] = isset($_POST[$field]) ? $_POST[$field] : ''; //
    }

//    if (mb_strpos($data['email'], '@') === false)
//    {
//        $errors['email'] = 'Invalid email!';
//    }

    if (count($errors) == 0)
    {
        saveUser();
        header('Location: success.html');
        exit();
    }
}

function saveUser()
{
    global $data;
    $file = fopen(USER_FILENAME, 'a');
    fputs($file, implode("\t", $data)."\n");
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
    global $data;
    return isset($data[$field]) ? $data[$field] :'';
}

function loadUser()
{

}