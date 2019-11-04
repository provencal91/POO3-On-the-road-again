<?php
require_once 'HighWayClass.php';

final class PedestrianWay extends HighWayClass
{
    public function __construct()
    {
        $this->setMaxSpeed(10);
        $this->setNbLane(1);
    }

    public function addVehicles(Vehicle $vehicle)
    {
        // TODO: Implement addVehicles() method.
        $vehicles = $this->getCurrentVehicles();
        if (!in_array($vehicle, $vehicles) && ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)) {
            array_push($vehicles, $vehicle);
            $this->setCurrentVehicles($vehicles);
        }
    }
}