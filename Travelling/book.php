<?php

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$mobileNumber = $_POST['mobileNumber'];
$email = $_POST['email'];
$guestNumber = $_POST['guestNumber'];
$roomsNumber = $_POST['roomsNumber'];
$checkInTime = $_POST['checkInTime'];
$checkOutTime = $_POST['checkOutTime'];

// SQL query to insert data into the table
$sql = "INSERT INTO book (name,mobileNumber, email, guestNumber, roomsNumber, checkInTime, checkOutTime) 
        VALUES ('$name','$mobileNumber', '$email', '$guestNumber', '$roomsNumber', '$checkInTime', '$checkOutTime')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} 
}
?>