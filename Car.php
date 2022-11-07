<?php

use LightableInterface;

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    private bool $hasParkBrake=true;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function start()
    {
        if ($this->hasParkBrake)  {
            throw new Exception("Hop hop hop ! Et le frein à main !", 1);
        }
        return 'Tu peux y aller mon gars !';
    }

    public function switchOn(): bool
    {
        return true;
    }
    
    public function switchOff(): bool
    {
        return false;
    }



    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of hasParkBrake
     */ 
    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}
