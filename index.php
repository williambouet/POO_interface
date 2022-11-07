<?php

use LDAP\Result;

require_once 'Vehicle.php';

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';

require_once 'HighWay.php';

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';



$bicycle = new Bicycle('blue', 1);
$voiture = new Car('green', 4, 'electric');
$camion = new Truck(100, 'rouge', 4, 'fuel');
$skate = new Skateboard('vert', 0);


$autoroute = new MotorWay();
$voiePietonne = new PedestrianWay();
$voieResidentielle = new ResidentialWay();


$autoroute->addVehicle($camion);
$autoroute->addVehicle($bicycle);
$autoroute->addVehicle($skate);
$autoroute->addVehicle($voiture);

$voiePietonne->addVehicle($camion);
$voiePietonne->addVehicle($bicycle);
$voiePietonne->addVehicle($skate);
$voiePietonne->addVehicle($voiture);

$voieResidentielle->addVehicle($camion);
$voieResidentielle->addVehicle($bicycle);
$voieResidentielle->addVehicle($skate);
$voieResidentielle->addVehicle($voiture);


$voiture->setParkBrake(true);

try {
    $voiture->start();
} catch (\Throwable $th) {
    if ($th->getCode() === 1) {
        $voiture->setParkBrake(false);
    }
} finally {
    echo 'Ma voiture roule comme un donut';
}


