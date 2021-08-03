<?php
if (isset($_POST['btn_debt'])) {
    require 'conn.php';

    //Receive data
    $name_of_creditor = mysqli_real_escape_string($conn, $_POST['cred']);
    $item_lended = mysqli_real_escape_string($conn, $_POST['item']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $cost = mysqli_real_escape_string($conn, $_POST['cost']);
    $lending_date = mysqli_real_escape_string($conn, $_POST['d']);
    $payment_date = mysqli_real_escape_string($conn, $_POST['dop']);

    //prepare the insert query
    $debt_query = "INSERT INTO `debt`(`id`, `customer_name`, `product_lended`, `quantity`, `cost`, `date_lent`, `date_paid`) VALUES (null,'$name_of_creditor','$item_lended','$quantity','$cost','$lending_date','$payment_date')";

    //save into the db
    $save_debt = mysqli_query($conn,$debt_query);

    //check if save was successful
    if ($save_debt){
        header("location:cereal.php");
    }else{
        echo "failed";
    }
}