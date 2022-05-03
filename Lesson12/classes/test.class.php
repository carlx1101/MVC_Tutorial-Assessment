<?php 

class Test extends Dbh
{
    public function getUsers()
    {
        $sql = "SELECT * FROM user";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) 
        {
            echo $row['users_firstname'].'<br>';
        }
    }

    public function getUsersStmt()
    {
        $sql = "SELECT * FROM user WHERE users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firname, $lastname]);
        $names = $stmt->fetchAll(); 

        foreach($names as $name)
        {
            echo $name['users_firstname'].'<br>';
        }
    }


    public function setUsersStmt($firstname, $lastname)
    {
        $sql = "INSERT INTO name VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firname, $lastname]);

    }
}

?>