<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'loginweb';
$conn = mysqli_connect($host, $username, $password, $database);

$NIM = $_POST['NIM'];
if (isset($_POST['proses'])) {


  // Memasukkan NIM ke dalam database
  $direktori = "berkas/";
  $file_name=$_FILES['NamaFile']['name'];
  move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

  mysqli_query($conn, "INSERT INTO upload (NIM, nama_file) VALUES ('$NIM','$file_name')");

  echo "<b>File berhasil diupload";
}
?>
