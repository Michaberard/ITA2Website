<?php 

/* //practice on connecting to database
 try{
    $handler =  new PDO('mysql:host=localhost;dbname=website','root','');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Successful connection with database!';
}
catch(PDOException $err)
{
    echo $err->getMessage();
    die();
}

    $query = $handler->query(' SELECT * FROM user');

    $r = $query->fetch();
    echo '<pre>', print_r($r), '</pre>';*/

class connect
{
    public function dbConnect()
    {
        return new PDO('mysql:host=localhost;dbname=website','root','');
    }
}

?> 



