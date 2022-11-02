<?php 

    if (isset($_POST["submit"])){

    include 'db_connection.php';

    $Name=mysqli_real_escape_string($conn,$_POST['Name']);
    $Email=mysqli_real_escape_string($conn,$_POST['Email']);    
    $Password=mysqli_real_escape_string($conn,$_POST['Password']);
    $Address=mysqli_real_escape_string($conn,$_POST['Address']);
    $Phone_no=mysqli_real_escape_string($conn,$_POST['Phone_no']);

    $sql = "SELECT * FROM customer WHERE Email='$Email'";
    $result = $conn->query($sql);


    if(!$row = mysqli_fetch_array($result))
    {
        $sql= "INSERT INTO `customer` (`Name`, `Email`, `Password`, `Address`, `Phone_no`, `Token`, `Pending`) VALUES ('$Name','$Email','$Password','$Address','$Phone_no','0','0')";

        $result=$conn->query($sql);

        echo '<script type="text/javascript"> alert("Customer Registration Successfull");window.location="sign.html";</script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Error : Email already exists");window.location="reg.html"; </script>';

    }

    }

?>