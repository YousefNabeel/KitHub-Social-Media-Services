<?php
include 'connect.php';

if (isset($_POST['sendBtn'])) {
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (email, message) VALUES ('$email', '$message')";
    mysqli_query($conn, $sql); 
}
?>
