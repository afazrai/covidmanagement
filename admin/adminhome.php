<?php

session_start();

    //this will prevent user entering the system without username
    if(!isset($_SESSION['username']))
    {
        header("location:../index.php");
    }

    //this will prevent user entering the system without correct usertype
    elseif($_SESSION['usertype']!='admin')
    {
        header("location:../index.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.css called -->
    <link rel="stylesheet" type="text/css" href="adminhome.css">
    
    <?php

        include '../getcss.php'

    ?>

    <title>Admin Dashboard</title>
    

</head>

<body>
    
    <header class="header">
        <p>Admin</p>

        <div class="btnlogout">
            <a href="../logout.php" class="btn btn-primary">Logout</a>

        </div>
    </header>

    <div class="container">

        <a href="staffmenu.php" class="menu_staff">
            <h1>Staff</h1>

        </a>

        <a href="" class="menu_stud">
            <h1>Student</h1>

        </a>

        <a href="" class="menu_daily">
            <h1>Daily Info</h1>

        </a>

        <a href="" class="menu_settings">
            <h1>Settings</h1>

        </a>

        

    </div>



</body>
</html>