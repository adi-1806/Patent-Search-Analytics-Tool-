<?php
// Connection to the database
$con = mysqli_connect("localhost", "root", "", "backend");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
