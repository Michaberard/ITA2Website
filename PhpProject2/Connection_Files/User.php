<?php

include_once ('connect.php');

class User
{
    private $db;
    
    public function __construct() {
        $this->db = new connect();
        $this->db = $this->db->dbConnect();
    }
    
    public function Login($name, $pass)
    {
        if(!empty($name) && !empty($pass))
        {
            $st = $this->db->prepare("SELECT * FROM user WHERE Username=? AND Password=?");
            $st->bindParam(1, $name);
            $st->bindParam(2, $pass);
            $st->execute();
            
            if($st->rowCount() == 1)
            {                echo 'User verified!';}
            else 
                {
                echo 'Wrong username or password';
                }
        }
        else {    echo 'Please enter your informations below!';}
    }
}

?>

