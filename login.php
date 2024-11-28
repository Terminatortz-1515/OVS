<?php
include "connection.php";
session_start();

if (isset($_POST['submit'])) {
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE phone = '$phone' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $row;
    header('Location: dashboard.php');
} else {
    echo 'Invalid phone or password';
}
}
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $row['firstname'];
    $_SESSION['user'] = $row['photo'];
    $_SESSION['user'] = $row['secondname'];
    $_SESSION['user'] = $row['lastname'];
    $_SESSION['user'] = $row['phone'];
    $_SESSION['user'] = $row['email'];
    }

$conn->close();


