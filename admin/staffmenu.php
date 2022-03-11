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
    <link rel="stylesheet" type="text/css" href="staffmenu.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <?php

        include '../getcss.php'

    ?>

    <title>Admin Dashboard</title>
    

</head>

<body>
    
    <?php
    
    //call header to staff page
    include 'adminheader.php';

    ?>




<div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search Student">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <input type="button" class="btn btn-primary" value="Reset" name="reset" onclick="window.location.href='staffmenu.php'">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body" >
                        <table class="table table-bordered" id="center">
                            <thead>
                                    <tr> 
                                        <th>Numbers of Staff</th>
                                    </tr>
                               <tbody>
                                   
                                <div>
                                <tr> 
                                        <th>
                                            <?php 
                                
                                            include 'getstaffdata.php'; 
                                                echo '<b>'.$row.'</tr>';
                            
                                                ?>
                                        </th>
                                    </tr>
                                
                                </div>
                            </thead>
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body" >
                        <table class="table table-bordered" id="center">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","onlinecovidproject");
                                    // $data=mysqli_connect($host,$user,$password,$db);
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM user WHERE CONCAT(username) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['username']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['department']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
     <div class="page_footer">
        <p class="footer">© Copyright : Polytechnic Sultan Mizan Zainal Abidin, Dungun, Terengganu</p>
    </div>
    </center>



</body>
</html>




<!-- <?php 
                                
                                include 'getstaffdata.php'; 
                                echo '<b>'.$row.'</b>';
                            
                            ?> -->