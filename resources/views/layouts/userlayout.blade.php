<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ninestars Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Wisata Yuk</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          {{-- <li><a class="nav-link scrollto" href="#about">About Us</a></li> --}}
          <li><a class="nav-link scrollto" href="/user">Daftar Tiket</a></li>
          <li><a class="nav-link scrollto" href="/tiket">History Tiket Anda</a></li>
          <li><a class="nav-link scrollto" href="/galery">Galery</a></li>
          <li><a class="nav-link scrollto" href="/ulasan">Ulasan</a></li>
          <li><a class="nav-link scrollto" href="/tim">Team</a></li>


          <li>

            <div class="">


                <div class="flex items-center">
                    <div class="flex items-center ms-3">


                        <div>
                        <button type="button" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <i class="fas fa-user"></i> <b>{{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;</b>
                        </button>
                      </div>
                      <div class="z-100 hidden my-4 text-base list-none bg-white divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <ul role="none">
                            <li>
                            <button data-modal-target="editprofileadmin{{ Auth::user()->id }}" data-modal-toggle="editprofileadmin{{ Auth::user()->id }}" class="text-black font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                    Profile
                                </button>
                            </li>
                            <li>
                                @auth
                                    <a href="{{ route('logout') }}/login"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="getstarted scrollto">
                                      Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                      </form>

                                @else
                                    <li>
                                      <a href="{{ route('login') }}" class="getstarted scrollto">Masuk</a>
                                   </li>
                                   <li>
                                  @if (Route::has('register'))
                                      <a href="{{ route('register') }}" class="getstarted scrollto">Daftar</a>
                                    @endif
                                   </li>

                                @endauth

                            </li>
                        </ul>
                      </div>

                          @if (!empty(Auth::user()->profile_image))
                          <div  style="width: 35px; height: 35px; overflow: hidden; border-radius: 50%;">
                            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Foto Profil" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                      @else
                      <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                          <path fill-rule="evenodd" d="M12 20a8 8 0 0 1-5-1.8v-.6c0-1.8 1.5-3.3 3.3-3.3h3.4c1.8 0 3.3 1.5 3.3 3.3v.6a8 8 0 0 1-5 1.8ZM2 12a10 10 0 1 1 10 10A10 10 0 0 1 2 12Zm10-5a3.3 3.3 0 0 0-3.3 3.3c0 1.7 1.5 3.2 3.3 3.2 1.8 0 3.3-1.5 3.3-3.3C15.3 8.6 13.8 7 12 7Z" clip-rule="evenodd"/>
                        </svg>
                        @endif

                    </div>
                  </div>
              </div>
            </div>


           </div>
            {{-- <a class="getstarted scrollto" href="#about">logout</a> --}}
         </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Selamat datang di website Wisata Yuk!!</h1>
          <h2>Kami akan melayani anda sebaik mungkin, karena kepuasan pelanggan no. 1</h2>
          <div>
            <a href="#services" class="btn-get-started scrollto">beli tiket sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="img/hero-img.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


  <main id="main">

   @yield('about')
    <!-- ======= Services Section ======= -->

   @yield('content')

   <!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->


      </div>
    </section><!-- End Portfolio Section -->





    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Clients</h2>
          <p>They trusted us</p>
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section --> --}}

    <!-- ======= Contact Us Section ======= -->
    <!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Team Section ======= -->
  <!-- End Team Section -->




  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
