<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST)) {
    $name = $_POST['name'];
    $place = $_POST['place'];
    $count = $_POST['count'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql = " INSERT INTO customer (name , place , count ,phone , email) VALUES('$name','$place' , '$count','$phone','$email')";
}


if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
