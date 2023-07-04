<?php
// Koneksi ke database
$host = 'nama_host_database';
$username = 'nama_pengguna';
$password = 'kata_sandi';
$database = 'nama_database';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan validasi login
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // Login berhasil
    echo "Selamat datang, " . $username . "!";
} else {
    // Login gagal
    echo "Username atau password salah.";
}

// Menutup koneksi database
mysqli_close($conn);
?>
