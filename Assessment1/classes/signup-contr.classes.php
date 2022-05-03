
<?php 
    
    class SignupContr extends Signup
    {
        // properties 
       private $username;
       private $password;
       private $rePassword;
       private $email;

       // variable here are data from the users, not same as above 
       public function __construct($username, $password, $rePassword, $email)
       {
        // left is properties =  right is data variable 
        $this->username = $username;
        $this->password = $password;
        $this->rePassword = $rePassword;
        $this->email = $email;
       }

       public function signupUser()
       {
            if ($this->emptyInput() == false)
            {
                header("location: ../index.php?error=emptyInput");
                exit();
            }
            if ($this->invalidUsername() == false)
            {
                header("location: ../index.php?error=username");
                exit();
            }
            if ($this->invalidEmail() == false)
            {
                header("location: ../index.php?error=email");
                exit(); 
            }
            // if ($this->passwordMatch() == false)
            // {
            //     header("location: ../index.php?error=passwordNotMatch");
            //     exit(); 
            // } 

            if ($this->usernameCheck() == false)
            {
                header("location: ../index.php?error=usernameTaken");
                exit(); 
            } 

            $this->setUser($this->username, $this->password, $this->email);

       }

       private function emptyInput()
       {
           $result;
           if (empty($this->username) || empty($this->password) || empty($this->rePassword)|| empty($this->email)) 
           {
                $result = false;

           }
           else 
           {
               $result = true;
           }
           return $result;
       }

       private function invalidUsername()
       {
           $result;
           if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username))
           {
               $result = false;
           }
           else 
           {
               $result = true;
           }
           return $result;
       }

       private function invalidEmail()
       {
           $result;
           if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
           {
               $result = false;
           }
           else 
           {
               $result = true;
           }
           return $result;
       }

    //        private function passwordMatch()
    //    {
    //        $result;
    //        if (!$this->password !== $this->rePassword)
    //        {
               
    //            $result = false;
    //        }
    //        else 
    //        {
    //            $result = true;
    //        }
    //        return $result;
    //    }
       
       private function usernameCheck()
       {
           $result;
           if (!$this->checkUser($this->username, $this->email))
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
