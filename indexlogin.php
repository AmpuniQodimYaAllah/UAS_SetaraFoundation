<?php

session_start();

if (!isset($_SESSION['session_username'])){
    header("Location: login.php");
    exit();
}

?>
<!-- Login -->
<!DOCTYPE html>
<html lang="en">

<head>
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


</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


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
                <a onclick="scrollToPosition(111)" class="nav-item nav-link btn" >Home</a>
                <a onclick="scrollToPosition(860)" class="nav-item nav-link btn">Keistimewaan</a>
                <a onclick="scrollToPosition(1500)" class="nav-item nav-link btn">About</a>
                <a onclick="scrollToPosition(2270)" class="nav-item nav-link btn">Kategori Beasiswa</a>
                <a onclick="scrollToPosition(2920)" class="nav-item nav-link btn">Testimoni</a>
                <a onclick="scrollToPosition(5291)" class="nav-item nav-link btn">Contact</a>
            </div>
            <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Keluar<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Website Beasiswa terpercaya</h5>
                                <h1 class="display-3 text-white animated slideInDown">Platform beasiswa terpopuler</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Beasiswa kami menyediakan kesempatan emas bagi para pelajar yang berpotensi untuk mewujudkan impian akademik mereka.</p>
                                <a href="Upload.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Ajukan Beasiswa</a>
                                <a href="cekstatus.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Cek Kelulusan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Website Beasiswa terpercaya</h5>
                                <h1 class="display-3 text-white animated slideInDown">Dapatkan beasiswa dengan mudah</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Kami dengan senang hati memberikan beasiswa kepada mereka yang berbakat dan berdedikasi untuk meraih prestasi dalam pendidikan.</p>
                                <a href="Upload.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Ajukan Beasiswa</a>
                                <a href="cekstatus.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Cek Kelulusan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">What Makes Us Different</h5>
                            <p>Selain mendapatkan dana beasiswa selama satu tahun, penerima beasiswa juga mendapatkan berbagai macam pelatihan soft skills</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Jaringan dan Pengembangan Diri</h5>
                            <p>Mahasiswa penerima beasiswa dari Setara Foundation memiliki akses ke jaringan dan sumber daya yang luas, termasuk mentorship, pelatihan, dan peluang pengembangan diri untuk membantu mereka meraih kesuksesan dalam studi mereka.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Kesetaraan Pendidikan Tanpa Batasan</h5>
                            <p>Setara Foundation berkomitmen untuk memberikan kesempatan pendidikan yang setara bagi semua individu, tanpa memandang latar belakang sosial, ekonomi, atau etnis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Mendorong Perubahan Sosial melalui Pendidikan</h5>
                            <p>Setara Foundation berupaya untuk menciptakan perubahan sosial dengan memberikan kesempatan kepada mahasiswa yang kurang beruntung untuk meraih pendidikan tinggi dan mencapai impian mereka.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Selamat Datang di Setara Foundation</h1>
                    <p class="mb-4">Sejak 1984, Setara Foundation terus konsisten dalam memberikan kontribusi terhadap dunia pendidikan di Indonesia. Langkah ini diawali kesadaran bahwa pendidikan merupakan salah satu upaya untuk meningkatkan kesejahteraan masyarakat dan bangsa dalam mewujudkan masa depan yang lebih baik.</p>
                    <p class="mb-4">Lebih dari 12.880 mahasiswa berprestasi telah menjadi penerima program. Mereka berasal dari berbagai macam latar belakang pendidikan di lebih dari 123 perguruan tinggi unggulan di seluruh 34 provinsi di Indonesia. Sebuah bukti keseriusan Setara Foundation dalam komitmennya membangun bangsa melalui pendidikan.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Setara Academic Excellence Scholarship</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Setara Young Leaders Scholarship</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Setara Research and Innovation Scholarship</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Setara Community Service Scholarship</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="Upload.php">Ajukan beasiswa</a>
                    <a href="cekstatus.php" class="btn btn-primary py-3 px-5 mt-2 animated slideInRight">Cek Kelulusan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kategori Beasiswa</h6>
                <h1 class="mb-4">Kategori Beasiswa di Setara Foundation</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" >
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Setara Academic Excellence Scholarship</h5>
                                    <small class="text-primary">30 Students</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" >
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Setara Young Leaders Scholarship</h5>
                                    <small class="text-primary">30 Students</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Setara Community Service Scholarship</h5>
                                    <small class="text-primary">40 Students</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Setara Research and Innovation Scholarship

                            </h5>
                            <small class="text-primary">40 Students</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimoni</h6>
                <h1 class="mb-1">Kata Para Alumni</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">WAHYU RIZKY ADMAJA</h5>
                            <p>BESWAN SETARA FOUNDATION 2011/2012</p>
                            <small>Menjadi bagian dari keluarga besar Beswan Setara Foundation ialah sebuah "titik" terpenting dalam hidup saya. Semua soft skill yang saya butuhkan dalam pekerjaan saat ini, hampir seluruhnya saya dapat dari program-program inspiratif Beasiswa Setara Foundation.
                                Untuk adik-adik yang telah menjadi Beswan Setara Foundation, selamat karena kalian sedang berada di track yang benar, ikuti seluruh pelatihannya dengan serius dan semangat!</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">KARISA LARAS WIDYADARI</h5>
                            <p>BESWAN SETARA FOUNDATION 2014/2015</p>
                            <small>Hingga saat ini, pengalaman menjadi Beswan Setara Foundation merupakan salah satu pengalaman yang sangat saya syukuri. Saya merasa bahwa banyak karakter-karakter yang saya miliki sekarang terbentuk dari pengalaman-pengalaman saya melalui program Beasiswa Setara Foundation. 
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">TEUKU JOHAR PRATAMA</h5>
                            <p>BESWAN SETARA FOUNDATION 2018/2019</p>
                            <small>Menjadi Beswan Setara Foundation, artinya dapat berkesempatan bertemu dan berinteraksi dengan banyak teman dari berbagai daerah dan latar belakang berbeda dari seluruh Indonesia. Jika sebelumnya lingkaran lingkungan saya cenderung dengan teman sedaerah, saat itu saya harus mulai belajar beradaptasi lebih dan berpikiran terbuka, banyak memahami dan mengobservasi bahwa adanya perbedaan bukanlah menjadi hambatan, namun dapat dijadikan kekuatan. </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">AULIA FIRDAUS BRILLIANTI</h5>
                            <p>BESWAN SETARA FOUNDATION 2020/2021</p>
                            <small>Begitu berharga visi yang coba saya raih, layaknya pengalaman menjadi Beswan Setara Foundation yang sangat saya syukuri. Saya bahagia bisa bertemu dengan ratusan mahasiswa berkualitas dari seluruh Indonesia. Kami berbeda, tetapi bersahabat, berani sukses muda dengan visi yang jelas melalui bimbingan pembina dan profesional.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
        
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <br> <br>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" onclick="scrollToPosition(111)" >Home</a>
                    <a class="btn btn-link" onclick="scrollToPosition(860)">Keistimewaan</a>
                    <a class="btn btn-link" onclick="scrollToPosition(1500)">About</a>
                    <a class="btn btn-link" onclick="scrollToPosition(2270)">Kategori beasiswa</a>
                    <a class="btn btn-link" onclick="scrollToPosition(2920)">Testimoni</a>
                    <a class="btn btn-link" onclick="scrollToPosition(5291)">Contact</a>
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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

<script>
    // Fungsi untuk menggulirkan halaman ke bawah dengan posisi tertentu
    function scrollToPosition(position) {
      window.scrollTo({
        top: position,
        behavior: 'smooth'
      });
    }
  </script>

</html>