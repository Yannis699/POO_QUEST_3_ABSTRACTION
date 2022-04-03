<?php

abstract class Vehicle{

    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
            $this->currentSpeed = $currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats():int
    {   
        return $this->nbSeats;
    }

    public function setNbSeats (int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels():int
    { 
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function forward(): string
    {
        if($this->currentSpeed <= 40) {
            return 'Damn, this car is too slow';
        } elseif ($this->currentSpeed >40 && $this->currentSpeed<80) {
            return 'It\'s not enough, I should accelerate ';
        } else {
            return 'I am fast as a torpedo !!';
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 5;
            $sentence .= "VROOM !!!";
        }
        $sentence .= " I'm stopped !";
        return $sentence;
        }
        
}