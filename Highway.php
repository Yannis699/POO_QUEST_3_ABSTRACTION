<?php

abstract class Highway {

    protected array $currentVehicles;
    protected int $nbLanes;
    protected int $maxSpeed;

    public function __construct (int $nbLane, int $maxSpeed)
     {
         $this->nbLane = $nbLane;
         $this->maxSpeed = $maxSpeed;
     }

    public function getCurrentVehicles(): array 
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLanes (): int
    {
        return $this->nbLane;
    }

    public function setNbLanes (int $nbLane): void
    {
        $this->nbLanes = $nbLane;
    }

    public function getMaxSpeed (): int
    {
       return $this->getMaxSpeed;
    }

    public function setMaxSpeed ($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    //abstract methods 

    abstract public function addVehicle($vehicle): string;

}