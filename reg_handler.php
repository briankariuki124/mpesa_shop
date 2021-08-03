<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['usr'];
$pass = $_POST['pass'];
$fname = $_POST['fn'];

$s = "SELECT * FROM `usertable` WHERE name = '$name'";

$res = mysqli_query($con, $s);

$num = mysqli_num_rows($res);
if ($num == 1){
    echo "Username already taken";
}else{
    $reg = "INSERT INTO `usertable`(`name`, `password`, `full_name`) 
    VALUES ('$name','$pass','$fname')";
    mysqli_query($con, $reg);
    echo "Registration succesfull";
}