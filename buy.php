<?php
include "config.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM accounts WHERE id=$id");
$row = $result->fetch_assoc();

echo "<h2>✅ Purchase Success</h2>";
echo "Username: " . $row['username'] . "<br>";
echo "Password: " . $row['password'] . "<br>";

// delete after sell
$conn->query("DELETE FROM accounts WHERE id=$id");
?>