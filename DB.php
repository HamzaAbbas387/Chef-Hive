<?php
$host = "localhost";
$user = "root"; // your DB username
$pass = "";     // your DB password
$db   = "chefhive"; // your DB name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cuisines_carousel";
$result = $conn->query($sql);

$cuisines = [];
while ($row = $result->fetch_assoc()) {
    $cuisines[] = $row;
}

?>
