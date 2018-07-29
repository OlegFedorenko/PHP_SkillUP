<?php

require __DIR__ . '/Classes/WorkerTask1.php';

$workerTask11 = new WorkerTask1();

$workerTask11 -> name = 'Ivan';
$workerTask11 -> age = 25;
$workerTask11 -> salary = 1000;

$workerTask12 = new WorkerTask1();

$workerTask12 -> name = 'Vasya';
$workerTask12 -> age = 26;
$workerTask12 -> salary = 2000;

echo $workerTask11->age + $workerTask12->age.'<br>';
echo $workerTask11->salary + $workerTask12->salary.'<br>';