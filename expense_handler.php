<?php
if (isset($_POST['btn_expenses'])){
    require 'conn.php';

    //Receive data
    $type = mysqli_real_escape_string($conn, $_POST['toe']);
    $amount = mysqli_real_escape_string($conn, $_POST['ea']);
    $date = mysqli_real_escape_string($conn, $_POST['doe']);

    //prepare the insert query
    $insert_expense = "INSERT INTO `expenditure`(`id`, `type`, `amount`, `date`) VALUES (null,'$type','$amount','$date')";

    //save into db
    $save_expense = mysqli_query($conn,$insert_expense);

    //check if save was successful
    if ($save_expense){
        header("location:cereal.php");
    }else{
        echo "failed";
    }
}