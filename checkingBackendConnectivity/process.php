<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "Ankit*137";
$database = "testdb";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

    
        $sql = "INSERT INTO nameage (name, age) VALUES ('$name', '$age')";

        if ($conn->query($sql) === TRUE) {
            echo "<h2>Data inserted successfully!</h2>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Name and age are required!";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
