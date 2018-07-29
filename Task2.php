<?php

require_once __DIR__ . '/Classes/WorkerTask2.php';


$workertask21 = new WorkerTask2();
$workertask21->setName('Ivan');
$workertask21->setAge(25);
$workertask21->setSalary(1000);

$workertask22 = new WorkerTask2();
$workertask22->setName('Vasya');
$workertask22->setAge(26);
$workertask22->setSalary(2000);

echo $workertask21->getAge()+$workertask22->getAge().'<br>';
echo $workertask21->getSalary()+$workertask22->getSalary();