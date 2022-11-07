<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{    
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        PARENT::__construct($nbLane, $maxSpeed);
    } 


    public function addVehicle(Vehicle $vehicle):void
    {
        if ($vehicle instanceof Bicycle  || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}