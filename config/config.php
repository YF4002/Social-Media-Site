<?php
ob_start(); //turns on output buffering 
session_start();// stores value of variables in a session

$timezone = date_default_timezone_set("America/Indiana/Indianapolis");

$con = mysqli_connect("localhost", "root","", "social");// connection variable

if(mysqli_connect_errno())
{
    echo "Failed to connect: " . mysqli_connect_errno();
}

?>
