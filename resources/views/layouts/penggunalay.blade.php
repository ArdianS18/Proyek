<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Multipager Template- Travelic </title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{ asset('css/pengguna.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="{{ asset('css/pengguna-font.css') }}" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="{{asset('css/font-awesome-animation.css')}}" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="{{asset('css/penggunastyle.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
         <div class="navbar navbar-inverse navbar-fixed-top">


             <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">YOUR LOGO</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="Package.html">PACKAGE</a></li>
                    <li><a href="Gallery.html">GALLERY</a></li>
                    <li><a href="Contact.html">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-image-container">
        <img src="{{ asset('photo/login-bg.jpg') }}" alt="Header Image" class="header-image">
    </div>

    @yield('content')


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>
     <!-- ISOTOPE SCRIPT   -->
    <script src="assets/plugins/jquery.isotope.min.js"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="assets/plugins/jquery.prettyPhoto.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>

<style>
    /* Add CSS styles for the header image container and image */
    .header-image-container {
        position: relative;
        height: 400x;
        overflow: hidden;
    }

    .header-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
