<?php
$conn = new mysqli("localhost","root","","bus_booking_system");
if($conn->connect_error){
    die("Database Error");
}
session_start();
?>