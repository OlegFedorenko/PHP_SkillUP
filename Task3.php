<?php

require_once __DIR__ . '/Classes/WorkerTask3.php';

$workertask31 = new WorkerTask3();
$workertask31->setName('Ivan');
$workertask31->setAge(25);
$workertask31->setSalary(1000);

$workertask31->setAge(125);

$workertask32 = new WorkerTask3();
$workertask32->setName('Vasya');
$workertask32->setAge(26);
$workertask32->setSalary(2000);

echo $workertask31->getAge()+$workertask32->getAge().'<br>';
echo $workertask31->getSalary()+$workertask32->getSalary();