<?php

require 'HighWayClass.php';
final class MotorWay extends HighWayClass
{
    public function __construct()
    {
        $this->setMaxSpeed(130);
        $this->setNbLane(4);
    }

    public function addVehicles(Vehicle $vehicle)
    {
        // TODO: Implement addVehicles() method.
        $vehicles = $this -> getCurrentVehicles();
        if (!in_array($vehicle, $vehicles) && ($vehicle instanceof Car || $vehicle instanceof Truck))
        {
            array_push($vehicles, $vehicle);
            $this->setCurrentVehicles($vehicles);
        }
    }
}
