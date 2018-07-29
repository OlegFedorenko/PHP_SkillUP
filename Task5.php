<?php

require __DIR__.'/Classes/UserTask5.php';
require __DIR__.'/Classes/Student.php';
require __DIR__.'/Classes/WorkerTask5.php';

$workerTask51 = new WorkerTask5();
$workerTask51->setName('Ivan');
$workerTask51->setAge(25);
$workerTask51->setSalary(1000);

$workerTask52 = new WorkerTask5();
$workerTask52->setName('Vasya');
$workerTask52->setAge(26);
$workerTask52->setSalary(2000);

echo $workerTask51->getSalary()+$workerTask52->getSalary();
