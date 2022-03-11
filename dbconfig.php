<?php

$host="localhost";

$user="root";

$password="";

$db="onlinecovidproject";



$data=mysqli_connect($host,$user,$password,$db);

//if not connected to database, error message popup
if($data===false)
{
    die("Connection Error");
}


?>