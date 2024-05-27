<?php
// Dapatkan data dari formulir
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi dan proses data (misalnya, simpan ke database)
// Ini hanya contoh dasar, jangan gunakan password_hash untuk keamanan

// Simpan data pengguna ke dalam file teks (sebagai contoh sederhana)
file_put_contents('users.txt', "$username,$email,$password\n", FILE_APPEND);

// Redirect ke halaman sign-in setelah sign-up berhasil
header('Location: index.html#signin');
exit;
?>
