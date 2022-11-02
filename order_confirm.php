<?php
    if (isset($_POST["confirm"])){

        include 'db_connection.php';

        session_start();
        $Email=$_SESSION['Email'];
    
        $sql="SELECT * FROM customer WHERE Email='$Email'";
        $result=$conn->query($sql);
        $retrive=mysqli_fetch_array($result);
        //print_r($retrive);
        $Customer_ID=$retrive['Customer_ID'];

        $Guest_number=mysqli_real_escape_string($conn,$_POST['Guest_number']);
        $Event_ID=mysqli_real_escape_string($conn,$_POST['Event']);    
        $Stage_ID=mysqli_real_escape_string($conn,$_POST['Stage']);
        $Decor_ID=mysqli_real_escape_string($conn,$_POST['Decor']);
        $Venue_ID=mysqli_real_escape_string($conn,$_POST['Venue']);
        $Food_ID=mysqli_real_escape_string($conn,$_POST['Food']);
        $Cake_ID=mysqli_real_escape_string($conn,$_POST['Cake']);
        $Pc_ID=mysqli_real_escape_string($conn,$_POST['Pc']);
        $Total_price=mysqli_real_escape_string($conn,$_POST['Total_price']);
        $Customization=mysqli_real_escape_string($conn,$_POST['Customization']);

        $sql= "INSERT INTO `service_purchased` (`Customer_ID`, `Total_price`,`Event`, `Stage`, `Decor`, `Venue`, `Food`, `Cake`, `No_of_guests`,`Photography_Cinematography`,`Customization`) VALUES ('$Customer_ID','$Total_price','$Event_ID','$Stage_ID','$Decor_ID','$Venue_ID','$Food_ID','$Cake_ID','$Guest_number','$Pc_ID','$Customization')";

        $result=$conn->query($sql);

        echo '<script type="text/javascript"> alert("Order Confirmed");window.location="index.php";</script>';

    }

?>