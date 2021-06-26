<?php
include "connection.php";
$id = $_POST['id'];
$result = mysqli_query($con,"DELETE FROM aquaculture WHERE id ='$id'");
if($result){
    header("Location:farmer_details1.php");
}
else{
    echo "failed";
}
?> 