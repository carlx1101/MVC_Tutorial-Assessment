<?php


namespace Person;

class Person
{
    // Properties 
    public $name; 
    public $age ; 

    // construction
    public function __construct($name,$age)
    {
        $this->name = $name; 
        $this->age = $age; 
    }

    // Destruction 
    public function getPerson()
    {
        return  $this->name; 
        return  $this->age; 
    }
}
?>