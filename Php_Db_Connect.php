<?php
$conn = new mysqli('localhost', 'root', '83ETASNM', 'TravelWeb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
