<?php
include "connection.php";
$id = $_POST['id'];
$result = mysqli_query($con,"DELETE FROM agriculture WHERE id ='$id'");
if($result){
    header("Location:farmer_details.php");
}
else{
    echo "failed";
}
?> 