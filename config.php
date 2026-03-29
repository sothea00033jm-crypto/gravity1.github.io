<?php
$conn = new mysqli("localhost", "root", "", "roblox_store");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>