<?php
if (isset($_POST['btn_undepo'])){
    require 'conn.php';

    //Receive data
    $date = mysqli_real_escape_string($conn, $_POST['dt']);
    $customer_name = mysqli_real_escape_string($conn, $_POST['namec']);
    $amount = mysqli_real_escape_string($conn, $_POST['undepo']);

    //prepare the insert query
    $insert_undepo = "INSERT INTO `undeposited`(`id`, `date`, `customer_name`, `amount`) VALUES (null,'$date','$customer_name','$amount')";

    //save into db
    $save_undepo = mysqli_query($conn,$insert_undepo);

    //check if save was successful
    if ($save_undepo){
        header("location:mpesa.php");
    }else{
        echo "failed";
    }
}
