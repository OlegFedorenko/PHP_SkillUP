<?php
spl_autoload_register(function ($class)
{
    $path = __DIR__.'/classes/'.str_replace('\\','/',$class).'.php';
    include $path;
});

error_reporting();
ini_set('display_errors', true);
define('USER_FILENAME', __DIR__.'/serialized-users.txt');