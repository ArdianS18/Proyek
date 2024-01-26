<!DOCTYPE html>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<html lang="">
</html>

   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- ite metas -->

      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min-user.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style-user.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/respon-user.css') }}">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery-user.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

      @vite(['resources/sass/app.scss', 'resources/js/app.js'])

       <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .navbar {
      background-color: #333;
      overflow: hidden;
      transition: background-color 0.3s;
    }

    .navbar:hover {
      background-color: #0d77e1;
      background-image: linear-gradient(to right, #6998f6, #2d2d2e);
    }

    .navbar:not(.hovered) {
      background-color: transparent !important;
    }

    .navbar a {
      float: left;
      display: block;
      color: #0d0d0d;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: rgb(249, 243, 243);
    }

    .logout-container {
      display: flex;
      align-items: center;
    }

    .logout-container a {
      color: #000000;
      text-decoration: none;
      margin-left: 15px;
    }

    .logout-container a:hover {
      background-color: red;
    }

    .ml-auto {
      margin-left: auto;
    }

    .card-link {
      text-decoration: none;
      color: inherit;
      display: inline-block;
    }

    .ticket-card {
      background-color: #fff;
      padding: 20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
      width: 330px; /* Atur lebar kartu */
      height: 470px;
      text-align: center;
    }

    .ticket-card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      transform: translateY(-5px);
    }

    .ticket-card img {
      width: 100%;
      height: 170px;
      object-fit: cover;
      border-radius: 8px;
    }

    .ticket-card h3 {
      /* margin-top: 30px;
      padding: 10px; */
    }

    .ticket-card p {
      margin: 8px 0;
    }

    .ticket-card strong {
      color: #007bff;
    }
      </style>

    </head>
   <body>

    @if (Auth::check() && !Auth::user()->email_verified_at)
    <div class="alert alert-danger mb-n1 text-center" role="alert">
        Anda belum verifikasi email,
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="text-danger btn btn-link p-0 m-0 align-baseline">{{ __('verifikasi ulang') }}</button>.
        </form>
    </div>
    @endif

      <div class="movies_section layout_padding">
         <div class="container">
            <div class="movies_menu">
               <ul>
                  <li><a href="/user">Daftar Wisata</a></li>
                  <li>
                    <a href="/tiket">Tiket Anda</a>
                  </li>
                  <li>
                    <a href="/ulasan">Ulasan User</a>
                  </li>
                  <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-fw fa-power-off"></i>
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                  </li>
               </ul>
            </div>

            <main>

                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-6">
                            @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                @yield('content')
            </main>

   </body>
</html>
