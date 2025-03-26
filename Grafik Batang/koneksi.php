<?php
$host = "localhost";  // Typically the default for local development
$username = "root";   // Default MySQL username
$password = "";       // Default password for local XAMPP/WAMP installations
$database = "modul_6"; // Name of your database from the phpMyAdmin screenshot

// Create connection
$koneksi = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>