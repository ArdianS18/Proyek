<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wisata</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
        body{
            background-color: #cfcfcf;
        }
        .containerr {
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(9, 0, 77, 0.65), rgba(9, 0, 77, 0.65)), url('{{ asset('photo/tropical.jpeg') }}');
            background-size: cover;
            background-position: center;
            padding: 10px 8%;
        }
        /* nav{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            position: fixed;
            height: 80px;
        }
        nav ul li{
            display: inline-block;
            margin: 10px 20px;
        }
        nav ul li a{
            color: #fff;
            text-decoration: none;

        } */
        .content{
            margin-top: 14%;
            color: #fff;
            max-width: 620px;
        }
        .content h1{
            font-size: 70px;
            font-weight: 600;
            line-height: 85px;
            margin-bottom: 25px;
        }
        /* .content form{
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 5px;
            padding: 10px;
            margin-top: 30px;
        } */

        nav{
      position: fixed;
      /* background: #ffb2c5; */
      height: 80px;
      width: 100%;
    }
    label.logo{
      color: black;
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
      color: rgb(0, 0, 0);
      font-size: 17px;
      font-family: sans-serif;
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
        color: #ffffff !important; /* Warna teks saat dihover */
    }

    .nav-linkk.active {
            background-color: #ffffff; /* Set the active link background color */
    }
    </style>
</head>
<body style="background-color: #ffffff">
    <nav style="background-color: #b7d1f9">
        <label class="logo" style="color: rgb(0, 0, 0)">Wisata</label>
        {{-- <img src="{{ asset('photo/tropical.jpeg') }}" alt=""> --}}
        <ul>
            <li><a class="nav-linkk {{ request()->routeIs('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}">Data Tiket</a></li>
            <li><a class="nav-linkk {{ request()->routeIs('tiket.index') ? 'active' : '' }}" href="{{ route('tiket.index') }}">Tiket Anda</a></li>
            <li><a class="nav-linkk {{ request()->routeIs('ulasan.index') ? 'active' : '' }}" href="{{ route('ulasan.index') }}">Ulasan</a></li>
            <li><a  href="{{ route('logout') }}/login"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
            </li>
        </ul>
        {{-- <button><img src="{{asset('photo/tropical.jpeng')}}" alt=""></button> --}}
    </nav><br><br>

    <div class="containerr">


    <div class="content">
        <h1>Selamat Datang di Wisata</h1>
        <p>ini tentang website pesan tiket</p>
            {{-- <form action="">
                <input type="text" placeholder="name">
                <button type="submit"></button>
            </form> --}}
    </div>

</div>

@yield('content')
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
