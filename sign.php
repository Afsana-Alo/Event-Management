<?php
    if (isset($_POST["submit"])){
    session_start();
    include 'db_connection.php';

    $Email=mysqli_real_escape_string($conn,$_POST['Email']);
    $Password=mysqli_real_escape_string($conn,$_POST['Password']);

    $sql="SELECT * FROM customer WHERE Email='$Email' AND Password ='$Password'";
    $result=$conn->query($sql);

    if(!$row=$result->fetch_array()){
        echo '<script type="text/javascript"> alert("Error : Username or password incorrect.");window.location="sign.html"; </script>';
    }
    else{
        $_SESSION['Email']=$_POST['Email'];
        // print_r($row);
        echo '<script type="text/javascript"> alert("You are successfully signed in.");window.location="index.php"; </script>';
        // header("Location:index.html");
    }
    }
?>