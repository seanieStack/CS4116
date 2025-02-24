<?php

/**
 * @var mysqli $conn
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CS4116";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


