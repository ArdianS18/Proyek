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


    <div id="home-sec">
        <div class="container"  >
            <div class="row text-center">
                <div  class="col-md-12" >
                    <span class="head-main" >Travel Template</span>
                    <h3 class="head-last col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3">Lorem ipsum dolor sit ametLorem</h3>
                </div>
            </div>
        </div>
    </div>


    <section  id="services-sec">
        <div class="container">
                <div class="row go-marg">

                    <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">

                        <div class="panel-body">
                             <h4 class="adjst">Tour Package One #1 </h4>
                            <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>


                        </div>
                    </div>

                    </div>
                   <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">

                        <div class="panel-body">
                             <h4 class="adjst">Tour Package Two #2 </h4>
                            <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>


                        </div>
                    </div>

                    </div>
                     <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">

                        <div class="panel-body">
                             <h4 class="adjst">Tour Package Three #3 </h4>
                            <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>


                        </div>
                    </div>

                    </div>
                </div>
        </div>
    </section>


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

    @yield('content')

</body>
</html>