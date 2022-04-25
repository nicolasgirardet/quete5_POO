<?php 

class Vehicle 
{
    private int $currentSpeed;

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     */ 
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }
}


?>