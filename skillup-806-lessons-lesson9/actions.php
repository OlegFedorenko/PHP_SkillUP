<?php

use Entity\User;
use Form\EmailFormField;
use Form\Form;
use Form\FormField;
use Form\PasswordFormField;

require_once __DIR__ . '/init.php';

$form = new Form('post');
$form->addField(new FormField('Имя', 'first_name'));
$form->addField(new FormField('Фамилия', 'last_name'));
$form->addField(new EmailFormField('Email', 'email'));
$form->addField(new PasswordFormField('Пароль', 'password'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	processRequest();
}

function processRequest()
{
	global $form;

	$isValid = $form->processRequest();

	if ($isValid) {
		$values = $form->getValues();
		$user = User::createFromArray($values);
		saveUser($user);
		header('Location: done.html');
		exit();
	}
}

function saveUser(User $user)
{
    global $pdo;

    /**
    КАК НЕ НАДО ДЕЛАТЬ

    $sql = "INSERT INTO users (first_name, last_name, email, password)
    VALUES (%s,%s,%s,%s)";
    $sql = sprintf($sql, $user->getFirstName(), $user->getLastName(), $user->getEmail(), $user->getPassword());
    $pdo->exec($sql);
    */

    $sql = 'INSERT INTO users (first_name, last_name, email, password)
            VALUES (:first_name, :last_name, :email, :password)';
    $query = $pdo->prepare($sql);

    $query->execute([
        'first_name' => $user->getFirstName(),
        'last_name' => $user->getLastName(),
        'email' => $user->getEmail(),
        'password' => $user->getPassword(),
    ]);
}
