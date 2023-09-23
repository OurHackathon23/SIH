<?php
$conn = mysqli_connect("localhost", "root", "", "hotel") or die("Connection failed: " . mysqli_connect_error());

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
