<?php

require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Skateboard.php';
require_once 'LightableInterface.php';

$carOne = new Car();

echo 'Regarding car n°1:';
echo '<br><br>';
echo 'switch on: ' . $carOne->switchOn();
echo '<br><br>';
echo 'switch off: ' .$carOne->switchOff();
echo '<br><br>';

$bikeOne = new Bike();

echo 'Regarding bike n°1:';
echo '<br><br>';
$bikeOne->setCurrentSpeed(8);
echo 'current speed: ' . $bikeOne->getCurrentSpeed();
echo '<br><br>';
echo 'switch on: ' . $bikeOne->switchOn();
echo '<br><br>';
echo 'switch off: ' . $bikeOne->switchOff();
echo '<br><br>';

$bikeTwo = new Bike();

echo 'Regarding bike n°2:';
echo '<br><br>';
$bikeTwo->setCurrentSpeed(20);
echo 'current speed: ' . $bikeTwo->getCurrentSpeed();
echo '<br><br>';
echo 'switch on: ' . $bikeTwo->switchOn();
echo '<br><br>';
echo 'switch off: ' .$bikeTwo->switchOff();
echo '<br><br>';

$skateboardOne = new Skateboard();



?>