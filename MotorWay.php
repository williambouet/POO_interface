<?php

require_once 'HighWay.php';

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';


final class MotorWay extends HighWay
{
   
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        PARENT::__construct($nbLane, $maxSpeed);
    } 
    public function addVehicle(Vehicle $vehicle):void
    {
        if (!($vehicle instanceof Bicycle) && !($vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}