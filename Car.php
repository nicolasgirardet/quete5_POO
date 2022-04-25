<?php 

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        return 'true';
    }

    public function switchOff()
    {
        return 'false';
    }
}


?>