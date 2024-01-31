<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wisata Yuk</title>
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

  <style>
    nav-link.active {
      background-color: #000; /* Set the active link background color */
    }
  </style>
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
          <li><a class="nav-link scrollto {{ request()->routeIs('staf.index') ? 'active' : '' }}" href="/" href="#hero">Home</a></li>
          {{-- <li><a class="nav-link scrollto" href="#about">About Us</a></li> --}}
          <li><a class="nav-link scrollto {{ request()->routeIs('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}">Daftar Tiket</a></li>
          <li><a class="nav-link scrollto {{ request()->routeIs('tiket.index') ? 'active' : '' }}" href="{{ route('tiket.index') }}">History Tiket Anda</a></li>
          <li><a class="nav-link scrollto {{ request()->routeIs('galery.index') ? 'active' : '' }}" href="{{ route('galery.index') }}">Galery</a></li>
          <li><a class="nav-link scrollto {{ request()->routeIs('ulasan.index') ? 'active' : '' }}" href="{{ route('ulasan.index') }}">Ulasan</a></li>
          {{-- <li><a class="nav-link scrollto " href="/tim">Team</a></li> --}}


          <li>

            <div class="">


                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                        <button type="button" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <i class="fas fa-user"></i> <b>{{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;</b>
                        </button>
                      </div>
                      <div class="z-100 hidden my-4 text-base bg-white divide-gray-100" id="dropdown-user">
                        <ul role="none">
                            <li>

                                <button data-modal-target="editprofile{{ Auth::user()->id }}" data-modal-toggle="editprofile{{ Auth::user()->id }}" class="text-black font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Edit Profile
                                    </button>
                            </li>
                            <li>
                                @auth
                                    <li>
                                        <a href="{{ route('logout') }}/login"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-black font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>

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

        <!-- Main modal -->
        <div id="editprofile{{ Auth::user()->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Profile
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambahdata">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Tutup modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" action="{{ route('editprofile.update',  ['editprofile' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="relative flex justify-center items-center">
                            @if (!empty(Auth::user()->profile_image))
                                <div  style="width: 300px; height: 300px; overflow: hidden; border-radius: 50%;">
                                    <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Foto Profil" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            @else
                                <svg class="w-27 h-27 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 20a8 8 0 0 1-5-1.8v-.6c0-1.8 1.5-3.3 3.3-3.3h3.4c1.8 0 3.3 1.5 3.3 3.3v.6a8 8 0 0 1-5 1.8ZM2 12a10 10 0 1 1 10 10A10 10 0 0 1 2 12Zm10-5a3.3 3.3 0 0 0-3.3 3.3c0 1.7 1.5 3.2 3.3 3.2 1.8 0 3.3-1.5 3.3-3.3C15.3 8.6 13.8 7 12 7Z" clip-rule="evenodd"/>
                                </svg>
                            @endif
                        </div>


                        <br><div class="grid gap-4 mb-4 grid-cols-2">

                            <div class="col-span-2">
                                <label for="profile_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Image : </label>
                                <input type="file" id="profile_image" name="profile_image" placeholder="Type product name">
                                @error('profile_image')
                                <span class="invalid-feedback" role="alert" style="color: red;">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name : </label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{old('name', Auth::user()->name )}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name">
                                @error('name')
                                <span class="invalid-feedback" role="alert" style="color: red;">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
  </header><!-- End Header -->


  <main id="main">


    {{-- <div class="container"> --}}
        <div class="justify-content-end">
            <div class="col-md-6">
                @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('Email sudah terkirim mohon untuk verifikasi secepatnya!!') }}
                </div>
                @endif
            </div>
        </div>
    {{-- </div> --}}

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
