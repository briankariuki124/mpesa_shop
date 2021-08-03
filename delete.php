<?php
if (isset($_GET['a'])) {
    require 'conn.php';
    extract($_GET);

//Prepare the delete query
    $delete_query = "DELETE FROM `stock` WHERE id=$a";

//Execute by use of mysqli
    $delete = mysqli_query($conn, $delete_query);

//Check if delete was successful
    if ($delete) {
       header("location:stock.php");
    } else {
        die("Deleting failed");
    }
}