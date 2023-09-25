<!DOCTYPE html>
<html>
  <head>
    <title>Check-In</title>
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
      <form  method="post">
        <div class="banner">
          <h1>Late Night Check-In</h1>
        </div>
        <div class="contact-item">
          <div class="item">
            <p>Name</p>
            <input type="text" name="latename"  />
          </div>
          <div class="item">
            <p>Student ID</p>
            <input type="text" name="latestudid"  />
          </div>
        </div>
        <div class="contact-item">
         
            <p>Type</p>
            <div>
              <input type="radio" id="car" name="latetype" value="car"
                     >
              <label for="car">Car</label>
            </div>
            <div>
              <input type="radio" id="motor" name="latetype" value="motor"
                     >
              <label for="motor">Motor</label>
            </div>
        
          
          <div class="item">
            <p>Phone</p>
            <input type="text" name="latephonenum"/>
          </div>
          <div class="item">
            <p>Plate Number</p>
            <input type="text" name="lateplatenum"/>
          </div>
          <div class="item">
            <p>Room number</p>
            <input type="" name="lateroomnum"/>
          </div>
          <div class="item">
            <p>Time Check-IN</p>
            <input type="time" name="lattime">
          </div>
          <div class="item">
            <p>Reasons</p>
            <textarea rows="1" name="latereason"></textarea>
          </div>
        </div>
       
        <div class="btn-block">
          <button type="button" value="back" onclick="location.href='homepage.php'">Back</button>
          <button type="submit" name="submit" href="/">Apply</button>
        </div>
      </form>
    </div>
  </body>
</html>

<?php

include 'connection.php';


if(isset($_POST['submit'])){

  $latename = $_POST['latename'];
  $latestudid = $_POST['latestudid'];
  $latetype = $_POST['latetype'];
  $latephonenum = $_POST['latephonenum'];
  $lateplatenum = $_POST['lateplatenum'];
  $lateroomnum = $_POST['lateroomnum'];
  $lattime = $_POST['lattime'];
  $latereason = $_POST['latereason'];

    $insert = "insert into latenight(latename,latestudid,latetype,latephonenum,lateplatenum,lateroomnum,lattime,latereason) values('$latename','$latestudid','$latetype','$latephonenum','$lateplatenum','$lateroomnum','$lattime','$latereason')";

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