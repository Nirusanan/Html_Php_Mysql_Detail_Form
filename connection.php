<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "connect";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$id=$_POST['index'];
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];

$sql = "INSERT INTO form1 VALUES ('$id', '$fname', '$lname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>