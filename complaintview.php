
<?php 
include 'connection.php';

if(isset($_GET['complaintviewid']))
{
    $id=$_GET['complaintviewid'];

    $sql = "SELECT * FROM complaint where Complaint_ID=$id ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    
    $Complaint_ID=$row['Complaint_ID'];
    $complaintdate=$row['complaintdate'];
    $complaintname=$row['complaintname'];
    $complaintstudid=$row['complaintstudid'];
    $complaintemail=$row['complaintemail'];
    $complaintphone=$row['complaintphone'];
    $complaintsem=$row['complaintsem'];
    $complaintroomnum=$row['complaintroomnum'];
    $complaintoutcome=$row['complaintoutcome'];


    
    
}

?>
<!DOCTYPE html>
<html>
  <title>Simple Sign up from</title>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      background-image: linear-gradient(to right, #FF416C,#102770);
      }
      
      
      
      body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      background-image: linear-gradient(to right, #ff7898,#323f6d);
      border-radius: 30px;
      }
      form {
      border: 5px solid #f1f1f1;
      border-radius: 30px;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 10px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 30px;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      }
      button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      border-radius: 20px;
      }
      h1 {
      text-align:center;
      font-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    }
    </style>
  </head>
  <body>

    <form action="admincomplaint.php">
      <h1>View Data</h1>
      
      <div class="formcontainer">
      <div class="container">
        <label for="uname"><strong>Date</strong></label>
        <input type="text"  disabled value="<?php echo $complaintdate; ?>" >
        <label for="uname"><strong>Name</strong></label>
        <input type="text"  disabled value="<?php echo $complaintname; ?>" >
        <label for="uname"><strong>Student ID</strong></label>
        <input type="text"  disabled value="<?php echo $complaintstudid; ?>" >
        <label for="uname"><strong>E-mail</strong></label>
        <input type="text"  disabled value="<?php echo $complaintemail; ?>" >
        <label for="uname"><strong>Phone Number</strong></label>
        <input type="text"  disabled value="<?php echo $complaintphone; ?>" >
        <label for="uname"><strong>Semester</strong></label>
        <input type="text"  disabled value="<?php echo $complaintsem; ?>" >
        <label for="uname"><strong>Room Number</strong></label>
        <input type="text"  disabled value="<?php echo $complaintroomnum; ?>" >
        <label for="uname"><strong>Complaint</strong></label>
        <input type="text"  disabled value="<?php echo $complaintoutcome; ?>" >
      </div>
      <button type="submit"><strong>Okay</strong></button>
      
      </div>
    </form>
  </body>
</html>