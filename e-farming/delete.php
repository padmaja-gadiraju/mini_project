<?php
 include "connection.php";
 $id = $_GET['id'];
 $del = mysqli_query($con, "DELETE FROM `agriculture` WHERE `id`= 'id' ");
 if($del){
    //header("Location: Farmer_details.php");
   // exit();
   echo "deleted";
 }
 else{
    echo "not deleted";
 }

?>
