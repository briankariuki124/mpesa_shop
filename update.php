<?php
if (isset($_GET['a'])) {
    require 'conn.php';
    extract($_GET);

//Prepare the delete query
    $delete_query = "DELETE FROM `products` WHERE id = $a";

//Execute by use of mysqli
    $delete = mysqli_query($conn, $delete_query);

//Check if delete was successful
    if ($delete) {
        header("location:products.php");
    } else {
        die("Deleting failed");
    }
}