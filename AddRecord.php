<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['senddata'])){
    $fname = $_POST['firstname'];
    $lname=$_POST['lastanme'];
    $emaild = $_POST['email'];
$sql = "INSERT INTO employee(firstname, lastname, email) 
VALUES ('$fname', '$lname', '$emaild')";
}
if ($conn->query($sql) === TRUE) {
  echo "New record Added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>