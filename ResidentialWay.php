<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        PARENT::__construct($nbLane, $maxSpeed);
    } 
    

    public function addVehicle(Vehicle $vehicle):void
    {
        $this->currentVehicles[] = $vehicle;
    }
}