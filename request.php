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
    $name = $_POST['name'];
    $number = $_POST['number'];
    $company = $_POST['company'];
    $model = $_POST['model'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $mode = $_POST['mode'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];

    $sql = "INSERT INTO booking (name, number, company, model, phone, service, date, mode, longitude, latitude) VALUES 
    ('$name','$number', '$company', '$model', '$phone', '$service', '$date', '$mode', '$longitude', '$latitude')";
    $result = $conn->query($sql);

    if ($result) {
        header("location: request.html");
    } else {
        echo "Error occured, try again!: ". $sql. "<br>". $conn->error;
    }
}

$conn->close();