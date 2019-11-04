<?php


require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';
require_once 'Truck.php';

var_dump(Car::ALLOWED_ENERGIES);
var_dump(Truck::ALLOWED_LEVEL);
$skateboard= new Skateboard('black',1,5);
var_dump($skateboard);
$bicycle= new Bicycle('blue', 1,15);
var_dump($bicycle);
$car= new Car('green',5,'electric',130);
var_dump($car);
$truck= new Truck('yellow',3,'fuel','in filling', 25,90);
var_dump($truck);

echo $skateboard->forward();
echo '<br> Vitesse du skateboard : ' . $skateboard->getCurrentSpeed() . ' km/h' . '<br>';
echo $skateboard->brake();
echo '<br> Vitesse du skateboard : ' . $skateboard->getCurrentSpeed() . ' km/h' . '<br>';
echo $skateboard->brake();
echo '<br>';
echo '<br>';

echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br>';
echo '<br>';

echo $car->forward();
echo '<br>';
echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>';
echo '<br>';

echo $truck->forward();
echo '<br>';
echo $truck->start();
echo'<br> Le chargement du camion est de : ' . $truck->getStockage() . ' Tonne' ;
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du Camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo 'Le chargement du camion est de : ' . $truck->getStockage() . ' Tonne' . '<br>';
echo $truck->brake();
echo '<br>';
echo '<br>';

$motorWay = new MotorWay();
$motorWay -> addVehicles($truck);
var_dump($motorWay);

$pedestrianWay = new PedestrianWay();
$pedestrianWay -> addVehicles($skateboard);
var_dump($pedestrianWay);

$residentialWay = new ResidentialWay();
$residentialWay -> addVehicles($bicycle);
var_dump($residentialWay);
