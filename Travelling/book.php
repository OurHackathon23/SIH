<?php

// Data from the form
$mobileNumber = $_POST['mobileNumber'];
$email = $_POST['email'];
$guestNumber = $_POST['guestNumber'];
$roomsNumber = $_POST['roomsNumber'];
$checkInTime = $_POST['checkInTime'];
$checkOutTime = $_POST['checkOutTime'];

// SQL query to insert data into the table
$sql = "INSERT INTO your_table_name (mobileNumber, email, guestNumber, roomsNumber, checkInTime, checkOutTime) 
        VALUES ('$mobileNumber', '$email', '$guestNumber', '$roomsNumber', '$checkInTime', '$checkOutTime')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
