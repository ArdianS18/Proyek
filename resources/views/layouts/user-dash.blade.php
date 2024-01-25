<!DOCTYPE html>
<html lang="en">
   <head>
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
      margin-top: 30px;
      padding: 25px;
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
      <div class="movies_section layout_padding">
         <div class="container">
            <div class="movies_menu">
               <ul>
                  <li><a href="/user">Daftar Wisata</a></li>
                  <li>
                    <a href="/tiket">Tiket Anda</a>
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
                @yield('content')
            </main>

      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
   </body>
</html>
