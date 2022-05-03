
<?php 
// Scope Resolution Operators 
class FirstClass 
{
    const EXAMPLE = "You cant change this !";


    public static function test()
    {
        $testing = 'this is a test !';
        return $testing;
    }
}

$result = firstClass::test();
echo $result;

?>


<?php

class SecondClass extends FirstClass 
{
    public static $staticProperty = "A static property !";

    public static function anotherTest()
    {
        echo parent::EXAMPLE; 
        echo self::$staticProperty;

    }

}

$result = SecondClass::anotherTest();
echo $result;

?>