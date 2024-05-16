<?php
$servername="localhost";
$username="u914843002_admin";
$password="AdminMS@1234";
$dbname="u914843002_mscv";

// Create connection
$conn=new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>