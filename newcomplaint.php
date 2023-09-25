<!DOCTYPE html>
<html>
  <head>
    <title>Complaint</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="neweditprofile.css" >
    <link rel="icon" type="image/x-icon" href="IMG/HostelIcon.svg" >
    <style>
      
    </style>
  </head>
  
  <body>
    <div class="testbox">
      <form method="POST">
        <div class="banner">
          <h1>Complaint</h1>
        </div>
        <div class="item">
          <p>Date of complaint</p>
          <input type="date" name="complaintdate" />
          
        </div>
        <div class="contact-item">
          <div class="item">
            <p>Name</p>
            <input type="text" name="complaintname"/>
          </div>
          <div class="item">
            <p>Student ID</p>
            <input type="text" name="complaintstudid"/>
          </div>
          
          <div class="item">
            <p>Email</p>
            <input type="text" name="complaintemail"/>
          </div>
          <div class="item">
            <p>Phone</p>
            <input type="text" name="complaintphone"/>
          </div>
          <div class="item">
            <p>Semester</p>
            <input type="text" name="complaintsem"/>
          </div>
          <div class="item">
            <p>Room number</p>
            <input type="" name="complaintroomnum"/>
          </div>
        </div>
       <div>
        <p>Desired outcome</p>
          <div class="desired-outcome-item">
            <textarea rows="5" name="complaintoutcome"></textarea>
       </div>
        <div class="btn-block">
          <button type="button" value="back" onclick="location.href='homepage.php'">Back</button>
          <button type="submit" name="submit" href="">Apply</button>
        </div>
      </form>
    
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){

    $complaintdate = $_POST['complaintdate'];
    $complaintname = $_POST['complaintname'];
    $complaintstudid = $_POST['complaintstudid'];
    $complaintemail = $_POST['complaintemail'];
    $complaintphone = $_POST['complaintphone'];
    $complaintsem = $_POST['complaintsem'];
    $complaintroomnum = $_POST['complaintroomnum'];
    $complaintoutcome = $_POST['complaintoutcome'];


    $insert = "insert into complaint(complaintdate,complaintname,complaintstudid,complaintemail,complaintphone,complaintsem,complaintroomnum,complaintoutcome)values('$complaintdate','$complaintname','$complaintstudid','$complaintemail','$complaintphone','$complaintsem','$complaintroomnum','$complaintoutcome')";

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