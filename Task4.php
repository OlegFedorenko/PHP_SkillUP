<?php

require_once __DIR__ . '/Classes/WorkerTask4.php';

$workertask4 = new WorkerTask4('Dima', 25);

$workertask4->setSalary(1000);

echo $workertask4->getAge() * $workertask4->getSalary();