<?php
// Establishing connection to the database
$connect = mysqli_connect('localhost', 'root', 'root', 'discoverdash');

// Checking if connection is successful
if (!$connect) {
    // Display an error message and terminate the script if connection fails
    die("Connection failed: " . mysqli_connect_error());
}