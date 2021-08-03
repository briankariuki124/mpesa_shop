<?php
if (isset($_POST['transactions'])){
    require 'conn.php';

    //Receive data
    $date = mysqli_real_escape_string($conn, $_POST['tdt']);
    $o_cash = mysqli_real_escape_string($conn, $_POST['oc']);
    $o_float = mysqli_real_escape_string($conn, $_POST['of']);
    $deposits = mysqli_real_escape_string($conn, $_POST['dep']);
    $withdrawals = mysqli_real_escape_string($conn, $_POST['ws']);

    //prepare the insert query
    $insert_transactions = "INSERT INTO `transactions`(`id`, `date`, `o_cash`, `o_float`, `deposits`, `withdrawals`) 
    VALUES (null,'$date','$o_cash','$o_float','$deposits','$withdrawals')";

    //save into db
    $save_transactions = mysqli_query($conn,$insert_transactions);

    //check if save was successful
    if ($save_transactions){
        header("location:mpesa.php");
    }else{
        echo "failed";
    }
}