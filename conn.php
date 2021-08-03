<?php
$conn = mysqli_connect("localhost", "root", "", "SokoMgmt");
if (!$conn){
    die("connection failed!");
}