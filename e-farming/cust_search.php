<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMER SEARCH</title>
    <link rel="stylesheet" href="cust_search.css">
</head>
<body>
    <h1 align = 'center'><b> E-Farming</b> </h1>
    <h1 align = 'center'><b> Agriculture</b> </h1>
    
    <div class="container" align='center'>
        <form action="" method="POST">
            <input type="text" name="crop" placeholder="CROP NAME"><br>
            <input type="text" name="mandal" placeholder="MANDAL"><br>
            <input type="submit" name="search" value="SEARCH"><br><br> 
            
        </form>
        
        <table align='center' >
                    <tr>
                        <th>Name</th>
                        <th>Crop</th>
                        <th>Quantity</th>
                        <th>Previous_Bid_Price</th>
                        <th>Present_Bid_Price</th>
                        <th>Contact</th>
                        <th>Village</th>
                        <th>Mandal</th>
                    </tr><br>

                <?php
                include "connection.php";

                if(isset($_POST['search']))
                {
                    $crop = $_POST['crop'];
                    $mandal = $_POST['mandal'];

                    $sql = "SELECT * FROM agriculture WHERE crop ='$crop' AND mandal='$mandal' ";
		            $result = mysqli_query($con, $sql);

                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['crop']; ?> </td>
                            <td> <?php echo $row['quantity']; ?> </td>
                            <td> <?php echo $row['prev_bid_price']; ?> </td>
                            <td> <?php echo $row['pres_bid_price']; ?> </td>
                            <td> <?php echo $row['contact']; ?> </td>
                            <td> <?php echo $row['village']; ?> </td>
                            <td> <?php echo $row['mandal']; ?> </td>
                            
                        </tr>

                        <?php
                    }
                }
                ?>
        </table>
        <p align = 'right'>
        <button type="submit" style="color:black;"><a href="Logout.php"> LOGOUT</a></button>
        </p>
        


    </div>
</body>
</html>