<!DOCTYPE html>
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

    <div class="container fadeIn">
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

</body>
</html>
