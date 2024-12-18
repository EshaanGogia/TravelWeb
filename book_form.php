<?php
include "Php_Db_Connect.php";

session_start(); // Start the session

if (isset($_POST['send'])) {
    if (!$conn) {
        die("Database connection failed!");
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO bookings(name, email, phone, address, location, guests, arrivals, leaving) 
                VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if (mysqli_query($conn, $request)) {
        $_SESSION['message'] = "Details Stored Successfully!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($conn);
        $_SESSION['message_type'] = "error";
    }

    mysqli_close($conn);

    header('location:book.php'); // Redirect to book.php
    exit();
}
?>


