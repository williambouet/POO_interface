<?php

use RechargeableInterface;


class ChargingStation
{
    public function fullCharge(RechargeableInterface $vehicle) 
    {
        $vehicle->charge(100);
    }
}