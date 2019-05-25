<?php
/**
 *  Author     : Dr. Susan Lauer   sdlauer@gmail.com
 */
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'publications';

// Create connection
$con = mysqli_connect($host,$user,$pass,$db);
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected successfully";

?>