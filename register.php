<?php
// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Save user data to a text file (simple example)
file_put_contents('users.txt', "$username,$email,$password\n", FILE_APPEND);

// Redirect to sign-in page after successful sign-up
header('Location: signin.html');
exit;
?>
