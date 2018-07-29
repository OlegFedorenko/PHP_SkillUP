<?php

class Driver extends WorkerTask6
{
    private $driverStage;
    private $driverCategory;

    public function setDriverStage($driverStage)
    {
        $this->driverStage = $driverStage;
    }

    public function getDriverStage()
    {
        return $this->driverStage;
    }

    public function setDriverCategory($driverCategory)
    {
        $this->driverCategory = $driverCategory;
    }

    public function getDriverCategory()
    {
        return $this->driverCategory;
    }
}