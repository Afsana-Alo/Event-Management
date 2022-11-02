<?php
    include 'db_connection.php';
    
    $sql0 = "SELECT * FROM service_items WHERE Type='fp'";
    $events = $conn->query($sql0);
    $sql1 = "SELECT * FROM service_items WHERE Type='st'";
    $stages = $conn->query($sql1);
    $sql2 = "SELECT * FROM service_items WHERE Type='d'";
    $decors = $conn->query($sql2);
    $sql3 = "SELECT * FROM service_items WHERE Type='v'";
    $venues = $conn->query($sql3);
    $sql4 = "SELECT * FROM service_items WHERE Type='f'";
    $foods = $conn->query($sql4);
    $sql5 = "SELECT * FROM service_items WHERE Type='c'";
    $cakes = $conn->query($sql5);
    $sql6 = "SELECT * FROM service_items WHERE Type='pc'";
    $pcs = $conn->query($sql6);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order.css">
    <title> Place order </title>
</head>

<body>

    <div class="bg-img">
        <div class="content" style="margin-top: 20px; width:570px;">
            <header>Gazellig-Your Dream Event</header>

            <p>Place your order</p>


            <form action="pay.php" method="post">
                <p class="prop"> Number of guests</p>
                <input type="number" name="Guest_number" class="m1" placeholder="Total number of guest" value="1">

                <p class="prop"> Select Event Type</p>
                <select name="Event" id="" class="m2">
                    <?php
                    foreach ($events as $event) {
                        echo '<option value="'.$event["Item_ID"].'">'.$event["Item_Name"].' - '.$event["Price"].'BDT </option>';
                    }
                    ?>
                </select>


                <p class="prop">Select Stage</p>
                <select name="Stage" id="" class="m2">
                    <?php
                    foreach ($stages as $stage) {
                        echo '<option value="'.$stage["Item_ID"].'">'.$stage["Item_Name"].' - '.$stage["Price"].'BDT </option>';
                    }
                    ?>

                </select>

                <p class="prop">Select Decor</p>
                <select name="Decor" id="" class="m2">
                <?php
                    foreach ($decors as $decor) {
                        echo '<option value="'.$decor["Item_ID"].'">'.$decor["Item_Name"].' - '.$decor["Price"].'BDT </option>';
                    }
                    ?>

                </select>
                <p class="prop">Select Venue</p>
                <select name="Venue" id="" class="m2">
                <?php
                    foreach ($venues as $venue) {
                        echo '<option value="'.$venue["Item_ID"].'">'.$venue["Item_Name"].' - '.$venue["Price"].'BDT </option>';
                    }
                    ?>

                </select>
                <p class="prop">Select Food</p>
                <select name="Food" id="" class="m2">
                <?php
                    foreach ($foods as $food) {
                        echo '<option value="'.$food["Item_ID"].'">'.$food["Item_Name"].' - '.$food["Price"].'BDT </option>';
                    }
                    ?>

                </select>
                <p class="prop">Select Cake</p>
                <select name="Cake" id="" class="m2">
                <?php
                    foreach ($cakes as $cake) {
                        echo '<option value="'.$cake["Item_ID"].'">'.$cake["Item_Name"].' - '.$cake["Price"].'BDT </option>';
                    }
                    ?>
                </select>


                <p class="prop">Photography & Cinematography</p>
                <select name="Pc" id="" class="m2">
                    <?php
                    foreach ($pcs as $pc) {
                        echo '<option value="'.$pc["Item_ID"].'">'.$pc["Item_Name"].' - '.$pc["Price"].'BDT </option>';
                    }
                    ?>

                </select>
                <p class="prop">Customization</p>
                <textarea placeholder="Customization " name="Customization" class=" margin" required ></textarea> <br>

                <input type="submit" class="submit margin" name="submit" value="submit">

            </form>
        </div>
    </div>


</body>

</html>