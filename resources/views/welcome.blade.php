{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wisata Yuk - Pemesanan Tiket</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #6895D2;
            color: #ecf0f1;
            overflow-x: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
        }

        .logo {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }

        .welcome-text {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .tagline {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .action-buttons {
            margin-top: 30px;
        }

        .action-buttons a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: #2c3e50;
            background-color: #ecf0f1;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
            font-weight: bold;
            font-size: 1rem;
        }

        .action-buttons a:hover {
            background-color: #3498db;
            color: #fff;
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeIn {
            animation: fadeIn 1s ease-out;
        }
    </style>
</head>
<body class="antialiased">

</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/color.css">
    <link rel="shortcut icon" href="images/resources/logo-j.png" type="image/x-icon">
    <title>Hotel Jino</title>
    <style>
      body, h1, h2, p {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Nunito', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f3f6ff;
        color: #000;
        overflow-x: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }

      .container {
        text-align: center;
        animation: fadeIn 1s ease-out;
        margin: 150px;
      }

      .logo {
        width: 150px;
        height: auto;
        margin-bottom: 20px;
      }

      .welcome-text {
        font-size: 2.5rem;
        margin-bottom: 20px;
      }

      .tagline {
        font-size: 1.2rem;
        margin-bottom: 40px;
      }

      .action-buttons {
        margin-top: 30px;
        display: flex;
        justify-content: center; /* Menambahkan properti untuk membuat tombol berada di tengah */
      }

      .action-buttons a {
        margin: 0 10px;
        padding: 10px 20px;
        text-decoration: none;
        color: #2c3e50;
        background-color: #ecf0f1;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out;
        font-weight: bold;
        font-size: 1rem;
        display: block; /* Menambahkan properti untuk membuat tombol menjadi blok, agar tata letaknya vertikal */
      }

      .action-buttons a:hover {
        background-color: #322805;
        color: #fff;
      }

      .header__container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #3498db;
        color: #fff;
      }

      .header__image img {
        width: 80px;
        height: auto;
        margin-right: 10px;
        border-radius: 50%;
      }

      .header__content {
        max-width: 600px;
      }

      .description__section {
        background-color: #ffffff;
        padding: 70px 0;
        text-align: center;
        /* margin: 90px; */
      }

      .description__section h2 {
        font-size: 20px;
        color: #333;
        margin-bottom: 30px;
      }

      .description__section p {
        font-size: 18px;
        color: #555;
        margin-bottom: 30px;
      }

      .photo__section {
        background-color: #f3f6ff;
        padding: 30px 0;
      }

      .photo__section h1 {
        font-size: 20px;
        color: #333;
        text-align: center;
        margin-bottom: 30px;
      }

      .photo__gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      .photo__gallery img {
        width: 300px;
        height: auto;
        margin: 10px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      /* Animation */
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(-20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <img src="{{ asset('photo/logo.png') }}" alt="Logo" class="logo">
        <div class="welcome-text">Selamat Datang di Wisata Yuk!</div>
        <div class="tagline">Temukan destinasi impian Anda dan pesan tiket sekarang.</div>

        <div class="action-buttons">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Beranda</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Masuk</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Daftar</a>
                @endif
            @endauth
        </div>
      </div>
    {{-- </header> --}}

    <section class="description__section">
      <div class="section__container">
        <h2>Keunggulan Hotel Jino</h2>
        <p>
          Nikmati pengalaman menginap yang tak terlupakan dengan fasilitas modern, pemandangan indah, dan layanan terbaik.
          Hotel Jino menyediakan berbagai fasilitas seperti taman yang indah, ruang bersantai, pusat kebugaran, layanan laundry, restoran, dan kolam renang.
        </p>
      </div>
    </section>

    <section class="photo__section">
      <div class="section__container">
        <h1><b> Fasilitas Hotel</b></h1>
        <div class="photo__gallery">
          <img src="{{ asset('photo/logo.png') }}" alt="Hotel Photo 1" />
          <img src="{{ asset('photo/logo.png') }}" alt="Hotel Photo 2" />
          <img src="{{ asset('photo/logo.png') }}" alt="Hotel Photo 1" />
          <img src="{{ asset('photo/logo.png') }}" alt="Hotel Photo 2" />
          <img src="{{ asset('photo/logo.png') }}" alt="Hotel Photo 1" />
          <img src="{{ asset('photo/logo.png') }}" alt="Hotel Photo 2" />
        </div>
      </div>
    </section>

    <!-- Tambahkan lebih banyak bagian dan konten sesuai kebutuhan -->
  </body>
</html>
