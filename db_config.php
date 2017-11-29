<?php
$servername = "localhost";
$username = "exam0113";
$password = "9fi41jshCcbrLOxh";
$dbname = "exam0113";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}