<?php
function connect_my_db()
{

    $host="localhost";
    $user="root";
    $password="12345678";
    $db="gurukulam";


    $con=mysqli_connect($host,$user,$password,$db) or die("Sorry unable to connect");
    return $con;
}
?>
<html>
<head>
<link rel="icon" href="nightmode.png" type="image/icon type">
</head>
</html>