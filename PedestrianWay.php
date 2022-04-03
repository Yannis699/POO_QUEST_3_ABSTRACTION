<?php

require_once 'Highway.php';

final class PedestrianWay extends Highway 
{
    public function __construct()
    {
        parent::__construct (1, 10);
    }

    public function addVehicle($vehicle): string
    {
        if(!($vehicle instanceof Bike) && (!($vehicle instanceof Skateboard)))
        {
            return " All vehicules except bikes and skateboards are not allowed";
           
        } else {
            $this->currentVehicles[] = $vehicle;
            return "You can go here";
        }
        
    }
    //PedestrianWay : Bike et Skateboard uniquement
}