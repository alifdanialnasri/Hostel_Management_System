<?php

session_start();  
include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="test.css">
  <link rel="icon" type="image/x-icon" href="IMG/HostelIcon.svg" >
</head>

<body>
  <header>
    <a href="https://front.codes/" class="logo" target="_blank">
    <img src="IMG/HostelIcon.svg" > 
</a>

  
  
  </header>

  <main>
    <div class="intro">
      <h1>Hostel Management System</h1>
      <p>ADMINISTRATOR PAGE</p>
    
    </div>
    <div class="container">
        <div class="box">
            <div class="content">
                <?php
                
                            $query = "SELECT id FROM roomregistration ORDER BY id";  
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Registered Room: '.$row.'</h4>';
                        ?>
            </div>
        </div>

        <div class="box">
        <div class="content" >  
           <?php
                
                $query = "SELECT login_id FROM user ORDER BY  login_id";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> Total User: '.$row.'</h4>';
            ?></div>
         
        </div>

        <div class="box">
        <div class="content" >  
           <?php
                
                $query = "SELECT login_id FROM user ORDER BY  login_id";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> Total User: '.$row.'</h4>';
            ?></div>
         
        </div>

        <div class="box">
        <div class="content" >
        <?php
                
                $query = "SELECT LATE_ID FROM latenight ORDER BY  LATE_ID";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>  Late-Night Request: '.$row.'</h4>';
            ?>
        </div>
            
        </div>

      
    </div>
    <div class="achievements">
    
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    
   
      <div class="work">
        
        <i class="fas fa-atom"><img src="IMG/HostelIcon.svg" alt=""></i>
        <a href="adminregister.php"><button type="button" value="back" class="button">Registered Room</button></a>
        
      </div>
      <div class="work">
        <i class="fas fa-skiing"><img src="IMG/HostelIcon.svg" alt=""></i>
        <a href="adminlatenight.php"><button type="button" value="back" class="button" >Requetsed Check-IN</button></a>
        
      </div>
      <div class="work">
        <i class="fas fa-ethernet"><img src="IMG/HostelIcon.svg" alt=""></i>
        <a href="admincomplaint.php"><button type="button" value="back" class="button">Submitted Complaint</button></a>
        
      </div>
    
      <!--
      <div class="work">
        <i class="fas fa-ethernet"><img src="IMG/HostelIcon.svg" alt=""></i>
        <a href="#"><button type="button" value="back" class="button">View User</button></a>
        
      </div> -->
      
      <div class="work">
        <i class="fas fa-ethernet"><img src="IMG/HostelIcon.svg" alt=""></i>
        <a href="logout.php"><button type="button" value="back" class="button">Logout</button></a>
        
      </div>
      
    </div>
    
   
     
</body>

</html>