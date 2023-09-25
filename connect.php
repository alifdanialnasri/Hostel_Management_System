<?php


$roomname = $_POST['roomname'];
$roomstudid = $_POST['roomstudid'];
$roomemail = $_POST['roomemail'];
$roomphone = $_POST['roomphone'];
$roomsem = $_POST['roomsem'];
$roomnum = $_POST['roomnum'];

//database connection

$conn = new mysqli('localhost','root','','hostelmanagementsystem');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);

}else
{
    $stmt = $conn->prepare("insert into roomregistration(roomname,roomstudid,roomemail,roomphone,roomsem,roomnum) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis",$roomname,$roomstudid,$roomemail,$roomphone,$roomsem,$roomnum);
    $stmt ->execute();
    echo "Submitted Successfully";
    $stmt->close();
    $conn ->close();
}


?>