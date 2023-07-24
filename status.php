<!DOCTYPE html>
<html>
<head>
  <title>Hasil Kelulusan</title>
</head>
<body>
 <!-- Favicon -->
 <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
</head>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i><img src="img/logo.png" alt="" style="width: 75px; height: auto;"></i></i>Setara Foundation</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                    </div>
                </div>
            </div>
            <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Keluar<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
  <br><br><br><br><br>
<?php
if(isset($_POST['nim'])){
  // Hubungkan dengan database SQL
  $host = 'komodo.kencang.id';
$username = 'beasisw1_root';
$password = 'o0]?MTkRQAXA';
  $database = 'beasisw1_loginweb'; // Ganti dengan nama database Anda
  $conn = mysqli_connect($host, $username, $password, $database);

  // Periksa koneksi ke database
  if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
  }

  // Mendapatkan nilai NIM dari input
  $nim = $_POST['nim'];

  // Lakukan kueri untuk mendapatkan data "kelulusan" dari tabel "mahasiswa" berdasarkan NIM
  $query = "SELECT kelulusan FROM upload WHERE kelulusan = 'Lulus'";
  $result = mysqli_query($conn, $query);

  if ($result) {
    // Ambil data "kelulusan" dari hasil kueri
    $row = mysqli_fetch_assoc($result);
    $Lulus = ($row['kelulusan'] == 'Lulus'); // Ganti "lulus" dengan nilai yang menandakan kelulusan dalam tabel

    // Menampilkan hasil kelulusan
    if ($Lulus) {
      echo "<h1>~Selamat ! Anda lulus~</h1>";
    } else {
      echo "<h1>Maaf, Anda tidak lulus.</h1>";
    }

    // Bebaskan memori hasil kueri
    mysqli_free_result($result);
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }

  // Tutup koneksi dengan database
  mysqli_close($conn);
}
?>
<br><br><br><br><br>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <br> <br>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="indexlogin.php" >Home</a>
                    <a class="btn btn-link" href="indexlogin.php">Keistimewaan</a>
                    <a class="btn btn-link" href="indexlogin.php">About</a>
                    <a class="btn btn-link" href="indexlogin.php">Kategori beasiswa</a>
                    <a class="btn btn-link" href="indexlogin.php">Testimoni</a>
                    <a class="btn btn-link" href="indexlogin.php">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Wonodadi, Gsmbar, Wonodadi, Kec. Wonodadi, Kabupaten Blitar, Jawa Timur (66155)</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+08523112003</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>SetaraFoundation@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/Husen_Jafar"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/vladimir putin"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@qodimbalighghonim9965"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://id.linkedin.com/in/momon-momon-35b52a88?trk=people-guest_people_search-card"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                   
                    <h2 class="m-0 text-primary"><i><img src="img/logo.png" alt="" style="width: 125; height: auto;"></h2>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Setara Foundation</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</body>
</html>
