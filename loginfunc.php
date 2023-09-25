<?php

include 'connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["pass"];

    $sql="SELECT * FROM user where username='$username' && pass='$password'";

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);

    if($row['usertype']=='user')
    {
        header('location:homepage.php');
    }
    else if ($row['usertype']=='admin')
    {
        header('location:adminpage.php');

    }
    else
    {
        echo "error";
    }
}

?>