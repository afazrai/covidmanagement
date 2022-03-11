<?php

//error_reporting(0);

session_start();

include 'dbconfig.php';

//login check method
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['username'];

    $pass=$_POST['password'];


    $sql="select * from user where username='".$name."' AND password='".$pass."' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);


    if($row["usertype"]=="admin")
    {
        $_SESSION['username']=$name;
        $_SESSION['usertype']="admin";
        header("location:./admin/adminhome.php");
    }

    elseif($row["usertype"]=="staff")
    {
        $_SESSION['username']=$name;
        $_SESSION['usertype']="staff";
        header("location:staffhome.php");
    }

    elseif($row["usertype"]=="student")
    {
        $_SESSION['username']=$name;
        $_SESSION['usertype']="student";
        header("location:studenthome.php");
    }

    else
    {

        $message= "username or password did not match";

        $_SESSION['loginMessage']=$message;

        header("location:index.php");
    }


}








?>