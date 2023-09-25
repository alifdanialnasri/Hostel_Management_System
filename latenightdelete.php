<?php 
include 'connection.php';

if(isset($_GET['latedeleteid']))
{
    $id=$_GET['latedeleteid'];


    $sql= " delete from latenight where LATE_ID=$id";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header('location:adminlatenight.php');
    }else{
        echo "Not Delete";
    }
}



?>