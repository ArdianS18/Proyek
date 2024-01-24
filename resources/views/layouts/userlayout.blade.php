<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pemesanan Tiket</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #FFD700; /* Warna kuning, sesuaikan dengan warna yang Anda inginkan */
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        nav #logo {
            font-size: 24px;
            font-weight: bold;
            margin-right: auto;
        }

        /* Add media query for responsiveness */
        @media screen and (max-width: 768px) {
            nav {
                padding: 10px;
            }

            nav a {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <nav>
        <div id="logo">NamaWebsite</div>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Pemesanan Tiket</a></li>
            <li><a href="#">Destinasi</a></li>
            <li><a href="#">Promo</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>

    <!-- Konten situs web Anda akan ada di sini -->

</body>
</html>
