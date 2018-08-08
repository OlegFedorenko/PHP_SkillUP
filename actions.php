<?php

use Form\Form;
use Form\FormField;
use Form\EmailFormField;
use Form\PasswordFormField;
use Entity\User;

require_once __DIR__.'/init.php';

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
        $values = $form->getValues();
        $user = User::createFromArray($values); // вызов статического метода класса User
        saveUser($user);
        header('Location: success.html');
        exit();
    }
}

function saveUser(User $user) //передаем объект клаасса User
{
    $file = fopen(USER_FILENAME, 'a');
    fputs($file, serialize($user)."\n");
    fclose($file);
}
