<?php

require_once 'Highway.php';

final class MotorWay extends Highway 
{
    public function __construct()
    {
        parent::__construct(4,130);
    }

    public function addVehicle($vehicle):string
    {
        if (($vehicle instanceof Bike) || ($vehicle instanceof Skateboard))
        {
            return 'Watch out, Bike and Skateboard are not authorized to go here';
        } else {
            $this->currentVehicles[] = $vehicle;
            return 'You can pass';
        }
      //motorway : Bike et Skateboard sont interdits
    }
}