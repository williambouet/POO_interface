<?php

require_once 'Vehicle.php';

Class Truck extends Vehicle 
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $capacity;

    private int $currentFilling = 0;

    public function __construct(int $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setCapacity($capacity);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }

        return $this;
    }

    public function isFull(): string
    {
        return $this->currentFilling < $this->capacity ? 'in filling' : 'full';
    }

    public function setCapacity(int $capacity)
    {
        if ($capacity > 0 ){
            $this->capacity = $capacity;
        }
    }

    public function setCurrentFilling(int $currentFilling)
    {
        if ($currentFilling > 0 ){
            $this->currentFilling = $currentFilling;
        }
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function getCurrentFilling(): int
    {
        return $this->currentFilling;
    }
}