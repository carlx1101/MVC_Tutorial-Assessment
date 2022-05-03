<?php
class Person
{
    // Properties 
    private $name; 
    private $height;
    private $age ; 

    // construction
    public function __construct($name, $height,$age )
    {
        $this->name = $name; 
        $this->height = $height; 
        $this->age = $age; 
    }

    // Methods 
    public function setName($name)
    {
        $this->name = $name; 
    }

    // Destruction 
    public function getName()
    {
        return  $this->name; 
    }
}


?>