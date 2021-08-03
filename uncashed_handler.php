<?php
if (isset($_POST['btn_uncashed'])){
    require 'conn.php';

    //Receive data
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $c_name = mysqli_real_escape_string($conn, $_POST['cname']);
    $amount = mysqli_real_escape_string($conn, $_POST['umount']);

    //prepare the insert query
    $insert_uncashed = "INSERT INTO `uncashed`(`id`, `date`, `customer`, `amount`) VALUES (null,'$date','$c_name','$amount')";

    //save into db
    $save_uncashed = mysqli_query($conn,$insert_uncashed);

    //check if save was successful
    if ($save_uncashed){
        header("location:mpesa.php");
    }else{
        echo "failed";
    }
}
