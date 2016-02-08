<?php

include_once 'Connection_Files/User.php';

if(isset($_POST['submit']))
{
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
    $client = new User();
    $client->Login($name, $pass);
}
?>


<form action="Login.php" method="post" >
    Username: <input type="text" name="username"/><br><br>
    Password: <input type="text" name="password"/><br><br>
    <input type="Submit" name="submit" value="Login"/>
</form>  
            

