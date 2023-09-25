<?php 
include 'connection.php';

if(isset($_GET['complaintdeleteid']))
{
    $id=$_GET['complaintdeleteid'];


    $sql= " delete from complaint where Complaint_ID=$id";
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header('location:admincomplaint.php');
    }else{
        echo "Not Delete";
    }
}



?>