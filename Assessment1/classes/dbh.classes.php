
<?php 
    class Dbh
    {   
        // protected : still a private class but anyclass using extend to this
        // class will be allow to access 
        protected function connect()
        {
            try 
            {
                $username = "root";
                $password = "";
                $dbh = new PDO('mysql:host=localhost;dbname=ooplogin',$username, $password);
                return $dbh; 
            }
            catch (PDOException $e)
            {
                print "Error : ".$e->getMessage(). "</br>";
                die();
            }
        } 
    }
    

?>
