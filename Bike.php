<?php

use LightableInterface;

require_once 'Vehicle.php';

class Bike extends Vehicle implements LightableInterface
{
    public const SPEED_FOR_DYNAMO = 10;

    public function switchOn(): bool
    {
        return $this->getCurrentSpeed() > self::SPEED_FOR_DYNAMO ? true : false;
    }
    
    public function switchOff(): bool
    {
        return false;
    }
}
