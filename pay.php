<?php 
    if (isset($_POST["submit"])){

    include 'db_connection.php';

    $Guest_number=mysqli_real_escape_string($conn,$_POST['Guest_number']);
    $Event_ID=mysqli_real_escape_string($conn,$_POST['Event']);    
    $Stage_ID=mysqli_real_escape_string($conn,$_POST['Stage']);
    $Decor_ID=mysqli_real_escape_string($conn,$_POST['Decor']);
    $Venue_ID=mysqli_real_escape_string($conn,$_POST['Venue']);
    $Food_ID=mysqli_real_escape_string($conn,$_POST['Food']);
    $Cake_ID=mysqli_real_escape_string($conn,$_POST['Cake']);
    $Pc_ID=mysqli_real_escape_string($conn,$_POST['Pc']);
    $Customization=mysqli_real_escape_string($conn,$_POST['Customization']);

    $Event_sql = "SELECT * FROM service_items WHERE Item_ID='$Event_ID'";
    $Stage_sql = "SELECT * FROM service_items WHERE Item_ID='$Stage_ID'";
    $Decor_sql = "SELECT * FROM service_items WHERE Item_ID='$Decor_ID'";
    $Venue_sql = "SELECT * FROM service_items WHERE Item_ID='$Venue_ID'";
    $Food_sql = "SELECT * FROM service_items WHERE Item_ID='$Food_ID'";
    $Cake_sql = "SELECT * FROM service_items WHERE Item_ID='$Cake_ID'";
    $Pc_sql = "SELECT * FROM service_items WHERE Item_ID='$Pc_ID'";

    $Event = mysqli_fetch_array($conn->query($Event_sql));
    $Stage = mysqli_fetch_array($conn->query($Stage_sql));
    $Decor = mysqli_fetch_array($conn->query($Decor_sql));
    $Venue = mysqli_fetch_array($conn->query($Venue_sql));
    $Food = mysqli_fetch_array($conn->query($Food_sql));
    $Cake = mysqli_fetch_array($conn->query($Cake_sql));
    $Pc = mysqli_fetch_array($conn->query($Pc_sql));
    // print_r($Event_price['Price']);
    $Total_price= $Event['Price'] + $Stage['Price'] + $Decor['Price'] + $Venue['Price'] + $Food['Price'] + $Cake['Price'] + $Pc['Price'];
    // print_r($Total_price);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="pay.css">
</head>
<body>

    <div class="box">
        <div class="box1">

            <h1>Confirm Order </h1>
            
        </div>
        <div class="box2">
            <h5 class="payh5">Order Details: </h5>
            <p style="text-align:left; margin-top: 5px;">
                <b>Amount of guest  :</b> <?php echo $Guest_number ?> <br>
                <b>Event            :</b> <?php echo $Event['Item_Name'] ?> - <?php echo $Event['Price'] ?> BTD <br>
                <b>Stage            :</b> <?php echo $Stage['Item_Name'] ?> - <?php echo $Stage['Price'] ?> BTD <br>
                <b>Decor            :</b> <?php echo $Decor['Item_Name'] ?> - <?php echo $Decor['Price'] ?> BTD <br>
                <b>Venue            :</b> <?php echo $Venue['Item_Name'] ?> - <?php echo $Venue['Price'] ?> BTD <br>
                <b>Food             :</b> <?php echo $Food['Item_Name'] ?> - <?php echo $Food['Price'] ?> BTD<br>
                <b>Cake             :</b> <?php echo $Cake['Item_Name'] ?> - <?php echo $Cake['Price'] ?> BTD<br>
                <b>Photography <br>
                & Cinematography    :</b> <?php echo $Pc['Price'] ?> BDT <br>
                <b>Customization    :</b> <?php echo $Customization ?> <br>
                <br>
            </p>

            <p><b>Total Amount : <?php echo $Total_price ?></b></p>
            <p>Send money to this number : 0170000000</p>
        </div>
        <form action="order_confirm.php" method="post">

            <input type="hidden" name="Guest_number" value="<?php echo $Guest_number ?>">
            <input type="hidden" name="Event" value="<?php echo $Event_ID ?>">
            <input type="hidden" name="Stage" value="<?php echo $Stage_ID ?>">
            <input type="hidden" name="Decor" value="<?php echo $Decor_ID ?>">
            <input type="hidden" name="Venue" value="<?php echo $Venue_ID ?>">
            <input type="hidden" name="Food" value="<?php echo $Food_ID ?>">
            <input type="hidden" name="Cake" value="<?php echo $Cake_ID ?>">
            <input type="hidden" name="Pc" value="<?php echo $Pc_ID ?>">
            <input type="hidden" name="Total_price" value="<?php echo $Total_price ?>">
            <input type="hidden" name="Customization" value="<?php echo $Customization ?>">

            <input type="submit" class="submit margin" name="confirm" value="Confirm order" >
        </form>
      
    </div>
    
</body>
</html>
