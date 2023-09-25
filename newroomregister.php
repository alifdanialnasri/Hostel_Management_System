<!DOCTYPE html>
<html>
  <head>
    <title>Room Register</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="newroomregister.css" >
    <link rel="icon" type="image/x-icon" href="IMG/HostelIcon.svg" >
    <style>
      
    </style>
  </head>
  
  <body>
    <div class="testbox">
      <form method="post" >
        <div class="banner">
          <h1>Room Register</h1>
        </div>
        <div class="contact-item">
          <div class="item">
            <p>Name</p>
            <input type="text" name="roomname"  />
          </div>
          <div class="item">
            <p>Student ID</p>
            <input type="text" name="roomstudid"  />
          </div>
        </div>
        <div class="contact-item">
          <div class="item">
            <p>Email</p>
            <input type="text" name="roomemail"/>
          </div>
          <div class="item">
            <p>Phone</p>
            <input type="text" name="roomphone"/>
          </div>
          <div class="item">
            <p>Semester</p>
            <input type="text" name="roomsem"/>
          </div>
          <div class="item">
            <p>Room number</p>
            <input type="text" name="roomnum"/>
          </div>
        </div>
       
        <div class="btn-block">
        <button type="button" value="back" onclick="location.href='homepage.php'">Back</button>
          <button type="submit" name="submit" href="/homepage.html">Apply</button>
        </div>
      </form>
    </div>
    
  </body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){

    $roomname = $_POST['roomname'];
    $roomstudid = $_POST['roomstudid'];
    $roomemail = $_POST['roomemail'];
    $roomphone = $_POST['roomphone'];
    $roomsem = $_POST['roomsem'];
    $roomnum = $_POST['roomnum'];

    $insert = "insert into roomregistration(roomname,roomstudid,roomemail,roomphone,roomsem,roomnum)values('$roomname','$roomstudid','$roomemail','$roomphone','$roomsem','$roomnum')";

    $query= mysqli_query($conn,$insert);


    if($query){

        ?>

        <script>
        swal({
            title: "Sucessful!",
            text: "Submitted Succesfully",
            icon: "success",
            button: "Okay",
          });
          
        
        </script>

        <?php
    }

}
?>