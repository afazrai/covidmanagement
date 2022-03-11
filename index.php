<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style.css called -->
    <link rel="stylesheet" type="text/css" href="style.css">
   
    <?php 

        include 'getcss.php'

    ?>
    
    <title>Online Covid-19 Management System</title>

</head>

<body>
    
    <nav>
        <label class="title">Covid-19 Student Management System</label>
    </nav>

    <div class="section1">
        <img class="main_logo" src="psmzalogo.png">
    </div>

    <center>

        <div class="form_design">

            <center class="error_msg">

            <h4 class="error_login">

                <?php
                    //this will show error message when username or password is not match
                    error_reporting(0);

                    session_start();
                    session_destroy();

                    echo$_SESSION['loginMessage'];

                ?>

            </h4>

            </center>

            <form action="login_check.php" method="POST" class="login_form">

                <div>
                    <label class="label_design">Username :</label>
                    <input type="text" name="username" placeholder="Matric Number/IC Number">
                </div>

                <div>
                    <label class="label_design">Password :</label>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>

            </form>

                <div class="page_footer">
                    <p class="footer">© Copyright : Polytechnic Sultan Mizan Zainal Abidin, Dungun, Terengganu</p>
                </div>

        </div>

    </center>

</body>
</html>