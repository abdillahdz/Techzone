<?php
session_start();

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check user credentials (example: check from text file)
$users = file('users.txt', FILE_IGNORE_NEW_LINES);

$is_valid_user = false;
foreach ($users as $user) {
    list($stored_username, $stored_email, $stored_password) = explode(',', $user);
    if ($username === $stored_username && $password === $stored_password) {
        $is_valid_user = true;
        break;
    }
}

if ($is_valid_user) {
    // Set session variable
    $_SESSION['username'] = $username;
    // Redirect to home page after successful login
    header('Location: index.html#home');
} else {
    // Redirect back to sign-in page with error message
    header('Location: signin.html?error=invalid_credentials');
}
exit;
?>
