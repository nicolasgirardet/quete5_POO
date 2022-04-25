<?php 

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        if($this->getCurrentSpeed() > 10) {return 'true';}
        else {return 'false';}
    }

    public function switchOff()
    {
        return 'false';
    }
}
