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

// Mendapatkan data dari formulir register
$username = $_POST['username'];
$password = $_POST['password'];

// Memeriksa apakah username sudah digunakan
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Username sudah digunakan
    echo "Username sudah terdaftar. Silakan gunakan username lain.";
} else {
    // Menambahkan pengguna baru ke tabel users
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        // Registrasi berhasil
        echo "Registrasi berhasil. Silakan login dengan akun baru.";
    } else {
        // Registrasi gagal
        echo "Registrasi gagal. Silakan coba lagi.";
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>
