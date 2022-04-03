<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'essence'
    ];

    private int $stockageCapacity;
    private int $cargo = 0;
    private int $energyLevel;


    public function __construct( string $color, int $nbSeats, string $energy, int $stockageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy=$energy;
        $this->stockageCapacity = $stockageCapacity;
    }

    public function getEnergy(): string
    {
        return $this->getEnergy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }

        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel):void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getStockageCapacity():int
    {
        return $this->stockageCapacity;
    }
    
    public function setStockageCapacity($stockageCapacity):void
    {
        $this->stockageCapacity = $stockageCapacity;
    }

    public function getCargo():void
    {
        $this->cargo;
    }

    public function setCargo($cargo): void
    {
        $this->cargo = $cargo;
    }

    
    public function load($cargo):string
    {
        $actualCapacity = $this->stockageCapacity;
        if($cargo <= $actualCapacity)
        {
            return 'I have not enought energy';

        }else{
            return 'I am full of energy, I will beat you all !!!!' . '<br>'. $this->forward() . '<br>' . $this->brake();
        }
    }
}