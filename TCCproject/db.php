<?php
$host = 'database-1.cgnnhjrbzn4r.us-east-1.rds.amazonaws.com';
$user = 'admin';
$pass = 'Yeehang2099';
$db = 'TCCproduct_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
