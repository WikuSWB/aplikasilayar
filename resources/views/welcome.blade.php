<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LAYAR : Layanan Administrasi RT/RW </title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('home/assets/img/layar-icon.png')}}" rel="icon">
    <link href="{{asset('home/assets/img/layar-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('home/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('home/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{('/')}}" class="logo d-flex align-items-center">
                <img src="{{asset('home/assets/img/logo.png')}}" alt="">
                <span>LAYAR</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Agenda</a></li>
                    <li><a class="nav-link scrollto" href="#footer">Tentang Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h6 data-aos="fade-up">Halo, Selamat Datang di</h6>
                    <h1 data-aos="fade-up">Layanan Administrasi RT / RW</h1>

                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{ route('login') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Daftar / Masuk</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('home/assets/img/hero-img3.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Profil</h3>
                            <h2>Perumahan Taman Mediterania</h2>
                            <p>
                                Perumahan Taman Mediterania merupakan perumahan yang berada di Batam, Indonesia.
                                Perumahan Taman Mediterania Batam memberikan lingkungan yang nyaman, aman, serta lokasi yang strategis. Dekat dengan pusat perbelanjaan, wisata dan hiburan di Kota Batam.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{asset('home/assets/img/about.jpg')}}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->





        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Layanan</h2>
                    <p>Layanan Pengajuan Surat Hanya Dengan 4 Langkah Mudah</p>
                </header>
                <div class="row gy-3">

                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-global-line icon"></i>
                            <h3>1. BUKA APLIKASI</h3>
                            <p>Ketik alamat domain pada browser anda</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-user-add-line icon"></i>
                            <h3>2. BUAT AKUN</h3>
                            <p>Mulai registrasi akun di LAYAR dan lengkapi biodata anda</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-send-plane-line icon"></i>
                            <h3>3. AJUKAN SURAT</h3>
                            <p>Mulai ajukan surat administrasi di aplikasi</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box purple">
                            <i class="ri-printer-line icon"></i>
                            <h3>4. SELESAI</h3>
                            <p>Pengajuan akan langsung diproses oleh Ketua RT / RW dan selesai.</p>

                        </div>

                    </div>

                </div>

            </div>


        </section><!-- End Services Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Agenda</h2>
                    <p>Foto - foto Kegiatan di Perumahan Taman Mediterania</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">

                                <div class="profile mt-auto">
                                    <img src="{{asset('home/assets/img/testimonials/gotongroyong.png')}}" class="testimonial-img" alt="">
                                    <h3>Kegiatan Gotong Royong</h3>
                                </div>
                                <p>
                                    Sabtu, 1 Oktober 2022 di Wilayah Blok KK
                                </p>

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">

                                <div class="profile mt-auto">
                                    <img src="{{asset('home/assets/img/testimonials/hutri.png')}}" class="testimonial-img" alt="">
                                    <h3>Kemeriahan Lomba 17 Agustus</h3>
                                </div>
                                <p>
                                    Minggu, 21 Oktober 2022 di Lapangan Blok KK
                                </p>

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">

                                <div class="profile mt-auto">
                                    <img src="{{asset('home/assets/img/testimonials/bansos.png')}}" class="testimonial-img" alt="">
                                    <h3>Program Bansos dari Pemko Batam</h3>
                                </div>
                                <p>
                                    Minggu, 9 Oktober 2022 di Lapangan GBK
                                </p>

                            </div>
                        </div><!-- End testimonial item -->



                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <footer id="footer" class="footer">

            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h4>Kegiatan Yang Akan Datang</h4>

                            <p></p>
                            <p></p>
                            <p>Minggu, 18 Desember 2022 - 22.00 WIB</p>
                            <h3>NOBAR FINAL Piala Dunia</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-top">
                <center>
                    <h2>Tentang Kami</h2>
                    <p></p>
                    <div class="container">
                        <div class="col-lg-5 col-md-12">
                            <h3>LAYAR atau Layanan Administrasi RT / RW adalah aplikasi web berbasis online yang bertujuan untuk memudahkan pengurusan administrasi seperti surat menyurat yang dibuat dengan mudah dimanapun dan kapanpun. </h3>
                            <p></p>
                            <lg>

                            </lg>

                            <a class="logo allign:center">

                                <img src="{{asset('home/assets/img/lyr_tagline.png')}}" alt="" />

                            </a>


                            <div class="social-links mt-3">
                                <a href="#" class="mail"><i class="bi bi-envelope-fill"></i> hubungi.layar@gmail.com</a>
                                <p>

                                </p>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i> aplikasilayar</a>
                            </div>
                        </div>


                    </div>

                </center>
            </div>

            <div class="container">
                <div class="copyright">
                    2022 &copy; Designed and Developed by <strong><span>Tim Layar</span></strong>.
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{asset('home/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{asset('home/assets/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('home/assets/vendor/php-email-form/validate.js')}}"></script>


        <script src="{{asset('home/assets/js/main.js')}}"></script>

</body>

</html>