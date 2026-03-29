<?php
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];
$price = $_POST['price'];

$conn->query("INSERT INTO accounts (username, password, price)
VALUES ('$username', '$password', '$price')");

header("Location: admin.php");
?>