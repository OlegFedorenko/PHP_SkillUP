<?php

spl_autoload_register(function ($class) {
	$path = __DIR__ . '/classes/' . str_replace('\\', '/', $class). '.php';
	include $path;
});

error_reporting(E_ALL);
ini_set('display_errors', true);

define('USERS_FILENAME', __DIR__ . '/serialized-users.txt');

$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '1808');

