<?php
function connect_my_db()
{

    $host="localhost";
    $user="root";
    $password="12345678";
    $db="gurukul";


    $con=mysqli_connect($host,$user,$password,$db) or die("Sorry unable to connect");
    return $con;
}
?>
