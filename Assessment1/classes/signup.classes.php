
<?php 
    
    class Signup extends Dbh 
    {
        protected function setUser($username, $password, $email)
        {   
            $stmt = $this->connect()->prepare('INSERT INTO users (username, password, email) VALUES (?,?,?);');
            
            // password_hash is a built in function 
            $hashedCredentials = password_hash($password, PASSWORD_DEFAULT);

            if (!$stmt->execute(array($username, $hashedCredentials, $email)))
            {
                $stmt = null; // delete the statement 
                header("location: ../index.php?error_stmtfailed");
                exit();
            }
            $stmt = null; 
        }

        protected function checkUser($username, $email)
        {   
            $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');
            
            if (!$stmt->execute(array($username, $email)))
            {
                $stmt = null; // delete the statement 
                header("location: ../index.php?error_stmtfailed");
                exit();
            }
            
            $resultCheck; 
            if ($stmt->rowCount() > 0)
            {
                $resultCheck = false;
            }
            else 
            {
                $resultCheck = true; 
            }
            return $resultCheck;
        }
    }
    

?>
