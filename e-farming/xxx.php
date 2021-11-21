<?php
include "connection.php";
$result = mysqli_query($con,"DELETE FROM agriculture WHERE id =''");
if($result){
    ?>
    <script>
        alert("Deleted Sucessfully");
    </script>
    <?php  
}else{
    ?>
    <script>
        alert("Not Deleted ");
    </script>
    <?php
}
header("Location:Farmer_details.php");
?> 