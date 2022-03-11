<?php

session_start();

    //this will prevent user entering the system without username
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }

    //this will prevent user entering the system without correct usertype
    elseif($_SESSION['usertype']!='student')
    {
        header("location:index.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>

    <h1>Student Home</h1>

    <a href="logout.php">Logout</a>
    
</body>
</html>