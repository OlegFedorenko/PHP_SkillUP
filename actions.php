<?php

require_once __DIR__.'/classes/Form.php'; //единоразовое подключение класса
require_once __DIR__.'/classes/EmailFormField.php';
require_once __DIR__.'/classes/PasswordFormField.php';

error_reporting();
ini_set('display_errors', true);
define('USER_FILENAME', __DIR__.'/users.txt');

$errors = [];
$data = [];

$form = new Form('post');
$form ->addField(new FormField('First name', 'fname'));
$form ->addField(new FormField('Last name', 'lname'));
$form ->addField(new EmailFormField('Email', 'email'));
$form ->addField(new PasswordFormField('Password', 'pword'));

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    processRequest();
}

function processRequest()
{
    global $form;

    $isValid = $form->processRequest();

    if ($isValid)
    {
        //saveUser();
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
