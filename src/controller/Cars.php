<?php
namespace App\controller;

use App\controller\Vehicle;

class Cars extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $carCurrentSpeed;
    private $energyType;
    private $energyLeft;

    public function __construct(string $Color, int $NbSeats, string $energyType )
    {
        parent::__construct($Color, $NbSeats);
        $this->setEnergyType($energyType);
    }


    public function engineStart()
    {
        return "Engine Start!";
    }

    public function setCarSpeed(int $carCurrentSpeed): void
    {
        if($carCurrentSpeed >= 0)
            $this->carCurrentSpeed = $carCurrentSpeed;
    }

    public function getCarSpeed(int $carCurrentSpeed): int
    {
        return $this->carCurrentSpeed;
    }
    
    public function setEnergyType(string $energyType): Cars
    {
        if (in_array($energyType, self::ALLOWED_ENERGIES)) {
            $this->energyType = $energyType;
        }
        return $this;
    }

    public function getCarEnergyType(int $carEnergyType): int
    {
        return $this->energyType;
    }
    
    public function getCarEnergyLeft(int $carEnergyLeft): int
    {
        return $this->energyLeft;
    }
    
    public function moveForward()
    {
        return "You're currently driving at $this->carCurrentSpeed miles per hour";
    }

    public function carBrake(): string
    {
        if($this->carCurrentSpeed > 0)
        {
            $this->carCurrentSpeed -= 5;
            if($this->carCurrentSpeed !== 0 || $this->carCurrentSpeed < 0)
                return "BREAK!<br>Now you're currently driving at $this->carCurrentSpeed miles per hour";
            else
                return "You are stopped!";
        }
        
    }

}

?>