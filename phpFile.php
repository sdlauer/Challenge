<?php
/**
 *  Author     : Dr. Susan Lauer   sdlauer@gmail.com
 */
$servername = "ec2-52-91-189-113.compute-1.amazonaws.com";
$username = "admin";
$password = "IsPoLw0hp0SH5UWTen96";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>