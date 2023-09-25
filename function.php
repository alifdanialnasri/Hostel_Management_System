<?php 

require_once 'connection.php';

function display_data(){

    global $conn;
    $query = "select * from users";
    $result = mysqli_query($conn,$query);
    return $result;
}

?>