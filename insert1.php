<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertion</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>

    <h1>FARMER</h1>
<form action="" method="POST">
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

        <input type="submit" name="insert" value="INSERT DATA"/>
        </form>
    </form>
</body>
</html>
<?php

include "connection.php";

if(isset($_POST['insert']))
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

    $query = "INSERT INTO `aquaculture`(`id`, `name`, `crop`, `quantity`, `prev_bid_price`, `pres_bid_price`, `contact`, `village`, `mandal`) VALUES ('$id','$name','$crop','[$quantity]','$prev_bid_price','$pres_bid_price','$contact','$village','$mandal')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        header("Location:farmer_details1.php");
    }
    else
    {
        header("Location:insert1.php");
    }
}
?>