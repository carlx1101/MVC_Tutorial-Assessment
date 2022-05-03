<?php
class Person
{
    // Properties 
    private $name; 
    private $height;
    private $age ; 

    // static properties 
    public static $drinkingAge = 14; 

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

    public function getDA()
    {
        return  self::$drinkingAge; 
    }

    public static function setDrinkingAge($newDrinkingAge)
    {
        self::$drinkingAge = $newDrinkingAge;
    }
}


?>