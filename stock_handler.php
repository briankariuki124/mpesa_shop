<?php
if (isset($_POST['btn_stock'])) {
    require 'conn.php';

    //Receive data
    $name = mysqli_real_escape_string($conn, $_POST['iname']);
    $quantity_in = mysqli_real_escape_string($conn, $_POST['qbi']);
    $purchasing_price = mysqli_real_escape_string($conn, $_POST['pp']);
    $date = mysqli_real_escape_string($conn, $_POST['dop']);

    //Prepare the insert query
    $insert_stock = "INSERT INTO `stock`(`id`, `product_name`, `quantity_in`, `purchasing_price`, `date`) 
    VALUES (null,'$name','$quantity_in','$purchasing_price','$date')";

    //Save
    $save = mysqli_query($conn, $insert_stock);

    //check if save was a success
    if ($save) {
        header("location:cereal.php");
    } else {
        echo "Error while saving!";
    }
}
