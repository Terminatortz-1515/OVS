<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'vehicle';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $photo = $_POST['photo'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin (firstname, secondname, lastname, email, phone, photo, password) VALUES ('$firstname','$secondname','$lastname', '$email', '$phone', '$photo', '$password')";
    $result = $conn->query($sql);

    if ($result) {
        header("location: login.html");
    } else {
        echo "Error occured, try again!: ". $sql. "<br>". $conn->error;
    }
}

$conn->close();