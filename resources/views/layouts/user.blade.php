<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    *{
      padding: 0;
      margin: 0;
      text-decoration: none;
      list-style: none;
      box-sizing: border-box;
    }
    body{
      font-family: montserrat;
    }
    nav{
      position: fixed;
      /* background: #ffb2c5; */
      height: 80px;
      width: 100%;
    }
    label.logo{
      color: white;
      font-size: 35px;
      line-height: 80px;
      padding: 0 100px;
      font-weight: bold;
    }
    nav ul{
      float: right;
      margin-right: 20px;
    }
    nav ul li{
      display: inline-block;
      line-height: 80px;
      margin: 0 5px;
    }
    nav ul li a{
      color: white;
      font-size: 17px;
      padding: 7px 13px;
      border-radius: 3px;
      text-transform: uppercase;
    }

    nav.link{
      float: right;
      margin-right: 20px;

      display: inline-block;
      line-height: 80px;
      margin: 0 5px;

      color: white;
      font-size: 17px;
      padding: 7px 13px;
      border-radius: 3px;
      text-transform: uppercase;
    }
    .nav-link.active {
      display: inline-block;
      line-height: 80px;
      margin: 0 5px;
      padding: 7px 13px;
      border-radius: 3px;
      background-color: #db71a2; /* Set the active link background color */
    }

    li a:hover {
        color: #db71a2 !important; /* Warna teks saat dihover */
    }
      /* a:hover{
      background: #db71a2;
    } */

  </style>
</head>
<body>
  <nav style="background-color: #ffb2c5">
    <label class="logo">Wisata</label>
    <ul>
      {{-- <li><a class="nav-link {{ request()->routeIs('user.index') ? 'active' : '' }}" href="/user">Daftar Wisata</a></li>
      <li><a class="nav-link {{ request()->routeIs('genre.index') ? 'active' : '' }}" href="/tiket">Tiket</a></li> --}}

      <li><a style="color: #fff; transition: color 0.3s;" href="">user</a></li>
      <li><a href="">Home</a></li>
      <li><a href="">Home</a></li>
      <li><a href="">Home</a></li>
    </ul>
  </nav>

    <div class="header-image-container">
    <img src="{{ asset('photo/login-bg.jpg') }}" alt="Header Image" class="header-image">
    </div>

      @yield('content')

  <style>
    /* Add CSS styles for the header image container and image */
    .header-image-container {
        position: relative;
        height: 440px; /* Adjust the height as needed */
        overflow: hidden;
    }

    .header-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

</body>
</html>
