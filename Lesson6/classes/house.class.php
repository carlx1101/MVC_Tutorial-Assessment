<?php
class House
{
    // Properties 
    public $streetName; 
    public $streetCode; 

    // construction
    public function __construct($streetName,$streetCode )
    {
        $this->streetName = $streetName; 
        $this->streetCode = $streetCode; 
    }

    // Destruction 
    public function getHouse()
    {
        return  $this->streetName; 
    }
}
?>