<?php 

require_once('connection.php');
require_once('function.php');
if(isset($_POST['search'])){
    $searchKey = $_POST['search'];
    $query = "SELECT * from complaint WHERE complaintname LIKE '%$searchKey%'";
}else
$query = "select * from complaint";
$result = mysqli_query($conn,$query)

?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Complaint</title>
<link rel="icon" type="image/x-icon" href="IMG/Hostel.png" >
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    body {
        color: #566787;
        background-image: linear-gradient(to right, #FF416C,#102770);
		font-family: 'Roboto', sans-serif;
	}
    .table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px;        
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }    
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Student <b>Complaint</b></h2></div>
                        <div class="col-sm-4">
                        <form method="POST">
                            <div class="search-box">
                               
                                <input type="text" class="form-control" placeholder="Search&hellip;" name="search">
                                <button>Search</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date<i class="fa fa-sort"></i></th>
                            <th>Name</th>
                            <th>Student ID <i class="fa fa-sort"></i></th>
                            <th>E-Mail</th>
                            <th>Phone <i class="fa fa-sort"></i></th>
                            <th>Semester</th>
                            <th>Room Number</th>
                            <th>Complaint</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php
                            
                            

                            while($row = mysqli_fetch_assoc($result))
                            {
                                $Complaint_ID=$row['Complaint_ID'];
                                $complaintdate=$row['complaintdate'];
                                $complaintname=$row['complaintname'];
                                $complaintstudid=$row['complaintstudid'];
                                $complaintemail=$row['complaintemail'];
                                $complaintphone=$row['complaintphone'];
                                $complaintsem=$row['complaintsem'];
                                $complaintroomnum=$row['complaintroomnum'];
                                $complaintoutcome=$row['complaintoutcome'];
                                


                                echo '
                                 <tr>
                                <td>'.$Complaint_ID.'</td>
                                <td>'.$complaintdate.'</td>
                                <td>'.$complaintname.'</td>
                                <td>'.$complaintstudid.'</td>
                                <td>'.$complaintemail.'</td>
                                <td>'.$complaintphone.'</td>
                                <td>'.$complaintsem.'</td>
                                <td>'.$complaintroomnum.'</td>
                                <td>'.$complaintoutcome.'</td>
                                <td>
                                <a href="complaintview.php?complaintviewid='.$Complaint_ID.'" class="view" title="view" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="delete.php?editid='.$Complaint_ID.'" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="complaintdelete.php?complaintdeleteid='.$Complaint_ID.'" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                </td>

                                
                               

                                



                                

                            </tr>';
                            
                            }

                                
                            ?>

                            
                            
                            
                        
                        
        
                    </tbody>
                </table>
                <div>
                <button type="button" value="back" onclick="location.href='adminpage.php'">Back</button>
                </div>
            </div>
        </div>        
    </div>     
</body>
</html>


