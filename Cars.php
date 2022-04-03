
  
<?php

require_once 'Vehicle.php';

class Cars extends Vehicle {

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private string $name;
    private string $energy;
    private int $energyLevel;

    public function __construct( string $name, string $color,  int $nbSeats, string $energy){
        $this->name = $name;
        $this->energy = $energy;
        parent::__construct($color, $nbSeats);
    }

    public function getName(): string 
    { 
        return $this->name;
    }

    public function setName($name): void 
    { 
         $this->name =$name;
    }

    public function getEnergy():string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Cars
    {
        if (in_array($energy, self::ALLOWED_ENERGIES))
            {
                $this->energy = $energy;
            }
            return $this;
    }
    
    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }


    // Départ 

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start(): string
    {
        if($this->energyLevel>45)
        {
            return 'Here we go';
        }
        elseif($this->energyLevel==45){
            return 'I\' have just enough energy. It will be tricky, go';
        }
        else {
            return 'I don\'t have enough energy';
        }

    }
}


