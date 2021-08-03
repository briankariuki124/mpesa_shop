<?php
if (isset($_POST['btn_sales'])){
    require 'conn.php';

    //Start receiving data
    $item = mysqli_real_escape_string($conn, $_POST['name']);
    $quantity = mysqli_real_escape_string($conn, $_POST['qty']);
    $price = mysqli_real_escape_string($conn, $_POST['prc']);
    $date = mysqli_real_escape_string($conn, $_POST['dt']);

    //Prepare the insert query
    $save_query = "INSERT INTO `sales`(`id`, `item_name`, `quantity`, `price`, `date_sold`) VALUES (null,'$item','$quantity','$price','$date')";

    //Save
    $save = mysqli_query($conn, $save_query);

    //Check if saving was successful
    if ($save){
        echo "Saved successfully";
    }else{
        echo "saving failed";
    }
}
