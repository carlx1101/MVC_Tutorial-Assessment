<?php

class Person
{
    // Properties
    public $name; 
    public $eyeColor; 
    public $age; 

    
    public function setName(string $newName)
    {
        $this->name = $newName; 

    }

    // Destruction 
    public function getName()
    {
        return  $this->name; 

    }
}
?>