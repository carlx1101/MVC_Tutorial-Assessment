
<?php 
    
    class LoginContr extends Login
    {

       private $username;
       private $password;

       // variable here are data from the users, not same as above 
       public function __construct($username, $password)
       {
        // left is properties =  right is data variable 
        $this->username = $username;
        $this->password = $password;

       }
       public function loginUser()
       {
            if ($this->emptyInput() == false)
            {
                header("location: ../index.php?error=emptyInput");
                exit();
            }

            $this->getUser($this->username, $this->password);

       }

       private function emptyInput()
       {
           $result;
           if (empty($this->username) || empty($this->password)) 
           {
                $result = false;
           }
           else 
           {
               $result = true;
           }
           return $result;
       }


    }
?>
