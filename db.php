<?php

$host = 'localhost';
$db_name = 'api';
$username = 'root';
$password = '';

$conn = new  mysqli($host, $username, $password, $db_name);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
} else {
    echo "connect to db";
}
