<?php

class WorkerTask4
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age)
    {
        $this->name;

        if ($this->checkAge($age))
        {
            $this->age = $age;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age)
    {
        if (($age > 1) and ($age < 100))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}