<?php

session_start();

if (!isset($_SESSION['session_username'])){
    header("Location: login.php");
    exit();
}

?>

<meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <?php
$host = 'komodo.kencang.id';
$username = 'beasisw1_root';
$password = 'o0]?MTkRQAXA';
$database = 'beasisw1_loginweb';
$conn = mysqli_connect($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['proses'])) {
$NIM = $_POST['NIM'];
$Nama_lengkap= $_POST['Nama_lengkap'];
$Universitas = $_POST['Universitas'];
$Prodi = $_POST['Prodi'];
$Semester = $_POST['Semester'];
$Alamat = $_POST['Alamat'];
$Domisili = $_POST['Domisili'];
$Tempat_Tanggal_Lahir = $_POST['Tempat_Tanggal_Lahir'];
$Beasiswa_yang_diinginkan = $_POST['Beasiswa_yang_diinginkan'];
$Nomor_telepon_aktif = $_POST['Nomor_telepon_aktif'];
$Email = $_POST['Email'];


  // Memasukkan NIM ke dalam database
  $direktori = "berkas/";
  $file_name=$_FILES['Nama_file']['name'];
  move_uploaded_file($_FILES['Nama_file']['tmp_name'],$direktori.$file_name);

  mysqli_query($conn, "INSERT INTO upload (NIM, Nama_lengkap, Universitas, Prodi, Semester, Alamat, Domisili, Tempat_Tanggal_Lahir, Beasiswa_yang_diinginkan, Nomor_telepon_aktif, Email, Nama_file) VALUES ('$NIM', '$Nama_lengkap', '$Universitas', '$Prodi', '$Semester', '$Alamat', '$Domisili', '$Tempat_Tanggal_Lahir', '$Beasiswa_yang_diinginkan', '$Nomor_telepon_aktif', '$Email', '$file_name')");

  echo "<b>File berhasil diupload";
}}
?>

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
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="register.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Masuk<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

<body>
<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h2 class="card-title text-center">FORM PENDAFTARAN</h2>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
        <div  class="card-text">
                <div class="mb-1">
                    <label for="NIM">NIM</label> <br>
                    <input type="number" id="NIM" name="NIM" required><br>
                    <small>Hanya angka yang diperbolehkan</small>
                </div>
                <div class="mb-1">
                    <label for="Nama_lengkap">Nama Lengkap</label> <br>
                    <input type="text" id="Nama_lengkap" name="Nama_lengkap" required><br>
                </div>
                <div class="mb-1">
                    <label for="Universitas">Universitas</label> <br>
                    <input type="text" id="Universitas" name="Universitas" required><br>
                </div>
                <div class="mb-1">
                    <label for="Prodi">Prodi</label> <br>
                    <input type="text" id="Prodi" name="Prodi" required><br>
                </div>
                <div class="mb-1">
                    <label for="Semester">Semester</label> <br>
                    <input type="text" id="Semester" name="Semester" required><br>
                </div>
                <div class="mb-1">
                    <label for="Alamat">Alamat</label> <br>
                    <input type="text" id="Alamat" name="Alamat" required><br>
                </div>
                <div class="mb-1">
                    <label for="Domisili">Domisili</label> <br>
                    <input type="text" id="Domisili" name="Domisili" required><br>
                </div>
                <div class="mb-1">
                    <label for="Tempat_Tanggal_Lahir">Tempat Tanggal Lahir</label> <br>
                    <input type="text" id="Tempat_Tanggal_Lahir" name="Tempat_Tanggal_Lahir" required><br>
                </div>
                <div class="mb-1">
                <form>
    <label for="beasiswa">Jenis Beasiswa:</label><br>
    <select type="option" id="Beasiswa_yang_diinginkan" name="Beasiswa_yang_diinginkan" required>
      <option value="academic">Setara Academic Excellence Scholarship</option>
      <option value="research">Setara Research and Innovation Scholarship</option>
      <option value="leaders">Setara Young Leaders Scholarship</option>
      <option value="service">Setara Community Service Scholarship</option>
    </select>
  </form>
                </div>
                <div class="mb-1">
                    <label for="Nomor_telepon_aktif">Nomor_telepon_aktif</label> <br>
                    <input type="text" id="Nomor_telepon_aktif" name="Nomor_telepon_aktif" required><br>
                </div>
                <div class="mb-1">
                    <label for="Email">Email</label> <br>
                    <input type="text" id="Email" name="Email" required><br>
                </div>
          <div class="log-font">
                <div class="mb-1">
                    <br><label for="berkas" >Pilih File ZIP</label><br>
                    <input type="file" id="berkas" name="Nama_file" accept=".zip" required><br>
                </div>
                <span>Maksimal ukuran file: 5MB</span><br>
                <button class="btn btn-success" type="submit" name="proses">Upload</button>
          </form>
        </div>
    </div> 
  </div>

<br><br>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
      <div class="row g-5">
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-3">Quick Link</h4>
              <a class="btn btn-link" href="">About Us</a>
              <a class="btn btn-link" href="">Contact Us</a>
              <a class="btn btn-link" href="">Privacy Policy</a>
              <a class="btn btn-link" href="">Terms & Condition</a>
              <a class="btn btn-link" href="">FAQs & Help</a>
          </div>
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-3">Contact</h4>
              <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
              <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
              <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
              <div class="d-flex pt-2">
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
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
              
              <div class="position-relative mx-auto" style="max-width: 400px;">
                  <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                  <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
              </div>
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

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>