<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['user'];
$uid = $_POST['id'];

$sql = "SELECT * FROM details WHERE name='$username' AND uid='$uid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: pay.html');
    exit;
} else {
    echo "Invalid username or password";
}

$conn->close();
