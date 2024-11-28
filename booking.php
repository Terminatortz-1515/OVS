<?php
include "connection.php";

$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rows = $result->fetch_assoc();
} else {
    echo 'failed';
}


$sql = "SELECT * FROM booking ORDER BY id ASC LIMIT 100";
$result = $conn->query($sql);

    
$conn->close();


