<?php

abstract class HighWayClass
{
    protected $currentVehicles = [];
    protected $nbLane;
    protected $maxSpeed;


    /**
     * @return mixed
     */
    public function getCurrentVehicles() : array
    {
        return $this->currentVehicles;
    }

    /**
     * @param mixed $currentVehicles
     */
    public function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    /**
     * @return mixed
     */
    public function getNbLane() : int
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract function addVehicles(Vehicle $vehicles);


}