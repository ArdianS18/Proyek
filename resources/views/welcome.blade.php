{{-- @extends('layouts.userlayout')
@section('about')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Selamat datang di website Wisata Yuk!!</h1>
          <h2>Kami akan melayani anda sebaik mungkin, karena kepuasan pelanggan no. 1</h2>
          <div>
            <a href="{{ route('user.index') }}" class="btn-get-started scrollto">beli tiket sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="img/hero-img.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <br><br>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                <img src="{{ asset('img/about-img.svg') }}" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">Voluptatem dignissimos provident quasi</h3>
                <p data-aos="fade-up" data-aos-delay="100">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
                <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris nisi</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                </div>
            </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->
@endsection --}}








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Beranda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link href="{{ asset('aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Ninestars
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        nav-link.active {
            background-color: #000;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>Wisata Yuk</span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li> @auth
                        <li><a class="nav-link scrollto {{ request()->routeIs('') ? 'active' : '' }}"
                                href="/">Home</a></li>
                        <li><a class="nav-link scrollto {{ request()->routeIs('user.index') ? 'active' : '' }}"
                                href="{{ route('user.index') }}">Daftar Tiket</a></li>
                        <li><a class="nav-link scrollto {{ request()->routeIs('tiket.index') ? 'active' : '' }}"
                                href="{{ route('tiket.index') }}">History Tiket Anda</a></li>
                        <li><a class="nav-link scrollto {{ request()->routeIs('galery.index') ? 'active' : '' }}"
                                href="{{ route('galery.index') }}">Galery</a></li>
                        <li><a class="nav-link scrollto {{ request()->routeIs('ulasan.index') ? 'active' : '' }}"
                                href="{{ route('ulasan.index') }}">Ulasan</a></li>

                        </li>

                        <a href="{{ route('logout') }}/login"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="getstarted scrollto">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <li>
                            <a href="{{ route('login') }}">Masuk</a>
                        </li>
                        <li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Daftar</a>
                            @endif
                        </li>

                    @endauth
                    </li>
                    <li>

                        <div class="">


                            <div class="flex items-center">
                                <div class="flex items-center ms-3">


                                    <div>
                                        <button type="button" aria-expanded="false"
                                            data-dropdown-toggle="dropdown-user">
                                        </button>
                                    </div>
                                    <div class="z-100 hidden my-4 text-base list-none bg-white divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                        id="dropdown-user">
                                        <ul role="none">

                                            <li>
                                                @auth
                                                    <a href="{{ route('logout') }}/login"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                        class="getstarted scrollto">
                                                        Logout
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                @else
                                                <li>
                                                    <a href="{{ route('login') }}">Masuk</a>
                                                </li>
                                                <li>
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}"
                                                            class="getstarted scrollto">Daftar</a>
                                                    @endif
                                                </li>

                                            @endauth

                    </li>
                </ul>
        </div>
        </div>
        </div>
        </div>
        </div>


        </div>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->




    <main id="main">



        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Selamat datang di website Wisata Yuk!!</h1>
                        <h2>Kami akan melayani anda sebaik mungkin, karena kepuasan pelanggan no. 1</h2>
                        <div>
                            <a href="{{ route('user.index') }}" class="btn-get-started scrollto">beli tiket
                                sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="img/hero-img.svg" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->
        <br><br>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="{{ asset('img/about-img.svg') }}" class="img-fluid" alt=""
                            data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">Beli tiket di Wisata Yuk</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Kami telah melayani berbagai traveler seperti anda salah satunya!!
                        </p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Kenama harus di Wisata Yuk??</h4>
                                <p>Karena kami disini menyediakan berbagai tiket untuk tempat tempat yang menarik </p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Berbagai tempat seperti apa?</h4>
                                <p>Kami menyediakan tiket untuk tempat yang contohnya Gunung Bromo, Pantai BaleKambang,
                                    dan lain sebagainya.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->







    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer style="background-color: #ffe5d4">

        <div class="footer-top">
            <div class="container py-4">
                <div class="row">

                    <br><br><br>
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>Wisata YUk</h3>
                        <p>
                            berada di malang, Jawa Timur <br><br>
                            <strong>No Telepon:</strong> +123456789<br>
                            <strong>Email:</strong> wisatayuk@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Tentang Wisata Yuk</h4>
                        <p>Sosial Media:</p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/tiket/status/1720325671275356301" class="twitter"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://web.facebook.com/tiketwisata.co/?_rdc=1&_rdr" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/digitiket/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.google.com/search?q=tiket+wisata&sca_esv=1d6a025a864bdd9f&rlz=1C1CHBD_idID1020ID1020&sxsrf=ACQVn0_YSSBbo4Hw5s-JPIA_oryvZG3EXw%3A1706799496633&ei=iLG7ZYOXJu2wseMP-Oyn6AI&ved=0ahUKEwiD-8vNs4qEAxVtWGwGHXj2CS0Q4dUDCBA&uact=5&oq=tiket+wisata&gs_lp=Egxnd3Mtd2l6LXNlcnAiDHRpa2V0IHdpc2F0YTIKECMYgAQYigUYJzIIEAAYgAQYsQMyBRAAGIAEMg4QLhiABBjHARivARiOBTIFEAAYgAQyDhAuGIAEGMcBGK8BGI4FMgUQABiABDILEC4YgAQYxwEYrwEyBRAAGIAEMgUQABiABEimEFCVBVixC3ACeAGQAQCYAY0BoAGIAqoBAzAuMrgBA8gBAPgBAcICChAAGEcY1gQYsAPiAwQYACBBiAYBkAYC&sclient=gws-wiz-serp"
                                class="google-plus"><i class="bx bxl-skype"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4   col-md-6 footer-links">
                        <h4>Website ini dibuat oleh</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">M. Ardian Supriadi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Jovita Maharani</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>


    </footer><!-- End Footer -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('aos/aos.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
