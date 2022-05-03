<?php 

class Calc 
{
    public $operator;
    public $firstNumber;
    public $secondNumber;
    
    // creating constructor 
    public function __construct(string $one, int $two, int $three)
    {
        $this->operator =  $one; 
        $this->firstNumber =  $two; 
        $this->secondNumber =  $three; 
    }
    
    public function calculator() 
    {
        switch ($this->operator)
        {
            case 'addition':
                $result = $this->firstNumber + $this->secondNumber; 
                return $result; 
                break;  
            
            case 'substraction':
                $result = $this->firstNumber - $this->secondNumber; 
                return $result; 
                break;  

            case 'multiplication':
                $result = $this->firstNumber * $this->secondNumber; 
                return $result; 
                break;         

            case 'division':
                $result = $this->firstNumber / $this->secondNumber; 
                return $result; 
                break;  
                
            default:
                echo "Erorr: Please Select an operator! ";

                break; 

        }
    }
}

?>