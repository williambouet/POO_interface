<?php

require_once 'Vehicle.php';

abstract class HighWay 
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    
    public function __construct(int $nbLane, int $maxSpeed )
    {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    } 

    abstract function addVehicle(Vehicle $vehicle);

    //SETTERS
    public function setCurrentVehicles(array $currentVehicles):void
    {
        $this->currentVehicles = $currentVehicles;
    }
    public function setNbLane(int $nbLane):void
    {
        $this->nbLane = $nbLane;
    }
    public function setMaxSpeed(int $maxSpeed):void
    {
        $this->maxSpeed = $maxSpeed;
    }

    //GETTERS
    public function getCurrentVehicles():array
    {
        return $this->currentVehicles;
    }
    public function getNbLane():int
    {
        return $this->nbLane;
    }
    public function getMaxSpeed():int
    {
        return $this->maxSpeed;
    }


}
