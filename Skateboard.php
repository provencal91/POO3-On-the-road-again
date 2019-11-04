<?php

require_once 'Vehicule.php';
class Skateboard extends Vehicle
{
public function __construct(string $color, int $nbSeats, int $currentSpeed)
{
    parent::__construct($color, $nbSeats, $currentSpeed);
}

}