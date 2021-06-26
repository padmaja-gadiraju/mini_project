<html>
<head>
<title> Updation </title>
<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
    <h1> Updation of Data into Database </h1>
        
        <form action="" method="POST">
        <input type="text" name="id" placeholder="Enter Emp ID"/><br/>
        <input type="text" name="name" placeholder="Enter  Name"/><br/>
        <input type="text" name="crop" placeholder="Enter Crop Name"/><br/>
        <input type="text" name="quantity" placeholder="Enter quantity"/><br/>
        <input type="text" name="prev_bid_price" placeholder="Enter Prevoius Bid Price"/><br/>
        <input type="text" name="pres_bid_price" placeholder="Enter Present Bid Price"/><br/>
        <input type="text" name="contact" placeholder="Enter Phone Number"/><br/>
        <input type="text" name="village" placeholder="Enter Village"/><br/>
        <input type="text" name="mandal" placeholder="Enter Mandal"/><br/>

        <input type="submit" name="update" value="UPDATE DATA"/>
        </form>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name =$_POST['name'];
    $crop =$_POST['crop'];
    $quantity =$_POST['quantity'];
    $prev_bid_price =$_POST['prev_bid_price'];
    $pres_bid_price =$_POST['pres_bid_price'];
    $contact =$_POST['contact'];
    $village =$_POST['village'];
    $mandal =$_POST['mandal'];


    $query = "UPDATE agriculture SET id ='$id',name='$name',crop='$crop',quantity='$quantity',prev_bid_price='$prev_bid_price',pres_bid_price='$pres_bid_price',contact='$contact',village='$village',mandal='$mandal' where id='$_POST[id]' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        header("Location:farmer_details.php");
    }
    else
    {
        header("Location:edit.php");
    }
}

?>
