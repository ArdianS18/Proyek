
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS (Contoh, dapat disesuaikan dengan framework atau gaya lainnya) -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 1000;
            padding-top: 20px;
            background-color: #343a40;
            color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow-x: hidden;
        }

        #sidebar a {
            text-decoration: none;
            font-size: 16px;
            color: #fff;
            padding: 15px 20px;
            display: block;
            transition: background-color 0.3s ease;
        }

        #sidebar a:hover {
            background-color: #007bff;
        }

        #sidebar .active {
            background-color: #007bff;
            width: 100%;
        }

        main {
            margin-left: 240px;
            padding: 20px;
        }
    </style>
</head>
<body>

    {{-- @if (Auth::check() && !Auth::user()->email_verified_at)
    <div class="alert alert-danger mb-n1 text-center" role="alert">
        Anda belum verifikasi email,
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="text-danger btn btn-link p-0 m-0 align-baseline">{{ __('verifikasi ulang') }}</button>.
        </form>
    </div>
    @endif --}}

    <header>
        <h3>Admin Dashboard</h3>

    </header>

    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block">
        <div class="position-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{ route('genre.index') }}">
                        Genre
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        film
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </li>

                <!-- Tambahkan menu atau tautan lainnya sesuai kebutuhan -->
            </ul>
        </div>
    </nav>

    <main>

        {{-- <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif
                </div>
            </div>
        </div> --}}

        @yield('content')
    </main>

    <!-- Bootstrap JS (Contoh, dapat disesuaikan dengan framework atau gaya lainnya) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
