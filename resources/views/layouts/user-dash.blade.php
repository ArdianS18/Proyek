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
      <!-- site metas -->
      <title>DBI</title>
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
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <div class="movies_section layout_padding">
         <div class="container">
            <div class="movies_menu">
               <ul>
                  <li class="active"><a href="#">Overview</a></li>
                  <li><a href="tv.html">TV</a></li>
                  <li><a href="movies.html">Movies</a></li>
                  <li><a href="#">Show</a></li>
                  <li><a href="celebs.html">Celeb</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Cartoon</a></li>
               </ul>
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


            </div>

            <main>
                @yield('name')
            </main>

      <div class="copyright_section">
         <div class="container">
            <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free html Templates</a></div>
         </div>
      </div>
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
