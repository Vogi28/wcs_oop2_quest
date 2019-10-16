<?php

namespace App\controller;

class Truck extends Vehicle
{
    
    private $capacity;
    private $energyType;
    
    const LOADING = [
        'in filling',
        'full',
    ];

    public function __construct(string $capacity, string $Color, int $NbSeats, string $energyType )
    {
        parent::__construct($Color, $NbSeats);
        $this->setCapacity($capacity);
        $this->energyType = $energyType;
    }
    
    public function setCapacity(string $capacity): Truck
    {
        if (in_array($capacity, self::LOADING)) {
            $this->capacity = $capacity;
        }
        return $this;
    }

    public function getCapacity(string $capacity): string
    {
        return $this->capacity;
    }

    public function setEnergyType(string $energyType): string
    {
        return $this->energyType;
    }

    public function getEnergyType(string $energyType): string
    {
        return $this->EnergyType;
    }
}