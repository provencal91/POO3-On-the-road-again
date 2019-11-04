<?php
require_once 'HighWayClass.php';

final class ResidentialWay extends HighWayClass
{
    public function __construct()
    {
        $this->setMaxSpeed(50);
        $this->setNbLane(2);
    }

    public function addVehicles(Vehicle $vehicle)
    {
        // TODO: Implement addVehicles() method.
        $vehicles = $this ->getCurrentVehicles();
        if (!in_array($vehicle, $vehicles))
        array_push($vehicles, $vehicle);
        $this -> setCurrentVehicles($vehicles);


    }

}