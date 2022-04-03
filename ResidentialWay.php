<?php

require_once 'Highway.php';

final class ResidentialWay extends Highway 
{
    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicle($vehicle): string
    {
        $this->currentVehicles[] = $vehicle;
        return "All vehicles are authorized here";
    }

    
}