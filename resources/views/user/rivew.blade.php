@extends('layouts.userlayout')

@section('content')

    <H1>Ini Halaman Tiket</H1>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Pemesanan Tiket - Nama Website</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .user-review {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .review-time {
            color: #777;
            font-size: 12px;
            margin-top: 8px;
        }

        /* Styling for Bootstrap Form Elements */
        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .btn {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <header>
        <h1>Review Pemesanan Tiket - Nama Website</h1>
        <!-- Tambahkan elemen-elemen header lainnya sesuai kebutuhan -->
    </header>

    <main>
        <section>
            <h2>Ringkasan Pemesanan</h2>
            <!-- Tambahkan informasi ringkasan pemesanan seperti nomor pemesanan, tanggal, dan lainnya -->
        </section>

        <section>
            <h2>Rating dan Ulasan</h2>
            <p>Berikan rating Anda untuk pengalaman pemesanan tiket ini:</p>
            <!-- Tambahkan elemen rating seperti bintang atau skala 1-10 -->
            
            <form action="/ulasan" method="post">
                @csrf
                <div class="form-group">
                    <label for="ulasan">Tulis ulasan anda :</label>
                    <textarea name="ulasan" class="form-control @error('ulasan') is-invalid @enderror" rows="4" placeholder="Masukkan ulasan anda">{{ old('ulasan') }}</textarea>
                    @error('ulasan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Kirim Ulasan</button>
                </div>
            </form>
        </section>

        <section>
            <h2>Ulasan Pengguna Lainnya</h2>
            @foreach ($ulasans->sortByDesc('created_at') as $key => $ulasan)
                <div class="user-review">
                    {{ $ulasan->ulasan }}
                    <div class="review-time">{{ \Carbon\Carbon::parse($ulasan->created_at)->locale('id')->diffForHumans() }}</div>
                </div>
            @endforeach
        </section>
        
    </main>

    <footer>
        <!-- Tambahkan elemen-elemen footer seperti informasi kontak dan tautan lainnya -->
    </footer>

    <!-- Tambahkan script atau link ke file JavaScript Anda di sini jika diperlukan -->

</body>
</html>
