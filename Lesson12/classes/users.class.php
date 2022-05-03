<?php 


class Users extends Dbh 

{
    protected function getUser($name)

    {
        $sql= "SELECT * FROM users WHERE users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        $result = $stmt->fetchAll();
        return $result;
    }

    protected function setUser($var,$var1) 

    {
        $sql = "INSERT INTO name VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$var,$var1]);
    }

}

?>