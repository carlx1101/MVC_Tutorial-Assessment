
<?php 
    
    class Login extends Dbh 
    {
        protected function getUser($username, $password)
        {   
            $stmt = $this->connect()->prepare('SELECT password from users WHERE username = ? OR email = ?;');
            
           
            if (!$stmt->execute(array($username, $password)))
            {
                $stmt = null; // delete the statement 
                header("location: ../index.php?error_stmtfailed");
                exit();
            }
            if ($stmt->rowCount() == 0)
            {
                $stmt = null; // delete the statement 
                header("location: ../index.php?error_useraccountNotFound");
                exit();
            }

            $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPassword = password_verify($password, $passwordHashed[0]['password']); // this stmt will return boolean
            
            if (checkPassword == false)
            {
                $stmt = null; // delete the statement 
                header("location: ../index.php?error_wrongpassword");
                exit();
            }
            elseif ($checkPassword == true)
            {
                $stmt = $this->connect()->prepare('SELECT password from users WHERE username = ? OR email = ?; AND password = ?;');
                if (!$stmt->execute(array($username, $username, $password)))
                {
                    $stmt = null; // delete the statement 
                    header("location: ../index.php?error_stmtfailed");
                    exit();
                }
                if ($stmt->rowCount() == 0)
                {
                    $stmt = null; // delete the statement 
                    header("location: ../index.php?error_useraccountNotFound");
                    exit();
                }
                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
                session_start(); 
                $_SESSION['userID'] = $user[0]["userID"];
                $_SESSION['username'] = $user[0]["username"];

            }
            $stmt = null; 
        }

    }
    

?>
