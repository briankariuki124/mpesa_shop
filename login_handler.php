<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userregistration');

$name = $_POST['usr'];
$pass = $_POST['pass'];
$fname = $_POST['fn'];

$s = "SELECT * FROM `usertable` WHERE name = '$name' && password = '$pass' ";

$res = mysqli_query($con, $s);

$num = mysqli_num_rows($res);
if ($num == 1) {
    $_SESSION['username'] = $name;
    header('location:home.php');
} else {
    header('location:login.php');
}

