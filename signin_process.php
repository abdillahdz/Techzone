<?php
// Dapatkan data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa data pengguna (contoh dasar, periksa dari file teks)
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
    // Redirect ke halaman beranda setelah berhasil login
    header('Location: index.html#home');
} else {
    // Redirect kembali ke halaman sign-in dengan pesan kesalahan
    header('Location: index.html#signin?error=invalid_credentials');
}
exit;
?>
