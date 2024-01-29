@extends('layouts.user')

{{-- <head>
    <title>Halaman Tiket</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Halaman Tiket</title>
</head> --}}

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    .logout-container {
      display: flex;
      align-items: center;
    }

    .logout-container a {
      color: #000000;
      text-decoration: none;
      margin-left: 15px;
    }

    .logout-container a:hover {
      background-color: red;
    }

    .ml-auto {
      margin-left: auto;
    }

    .card-link {
      text-decoration: none;
      color: inherit;
      display: inline-block;
    }

    .ticket-card {
      background-color: #fff;
      padding: 20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
      width: 300px; /* Atur lebar kartu */
      height: 420px; /* Atur tinggi kartu */
      text-align: center;
    }

    .ticket-card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      transform: translateY(-5px);
    }

    .ticket-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
    }

    .ticket-card h3 {
      margin-top: 15px;
    }

    .ticket-card p {
      margin: 8px 0;
    }

    .ticket-card strong {
      color: #007bff;
    }


    .index{
      background-color: ;
    }

    .description__section {
        background-color: #ffeeee;
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
  </style>
</head>
<body>



<br><br><br>
{{-- <header class="index">
<img src="{{ asset('photo/bg.jpeg') }}" width="2000px" height="20px" alt="">
Selamat Datang
</header> --}}


{{-- <header class="description__section">
  <div class="section__container">
    <h2>Keunggulan Website Kami</h2>
    <p>
      Nikmati pengalaman berwisata dan perjalanan menyenangkan betsama kami
    </p>
  </div>
</header> --}}
{{-- </header> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama User</title>

    <!-- Gaya eksternal -->
    <link rel="stylesheet" href="path/to/your/external/styles.css">

    <!-- Gaya internal -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .container {
            padding: 20px;
        }

        .search-container {
            margin-top: 20px;
        }

        .search-container input[type="search"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-container button {
            padding: 10px;
            border: none;
            background-color: #0d77e1;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .ticket-card {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
            width: 300px;
            text-align: center;
        }

        .ticket-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .ticket-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .card-link {
            text-decoration: none;
            color: inherit;
            display: inline-block;
        }

        .logout-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .logout-container a {
            color: #333;
            text-decoration: none;
            margin-left: 15px;
        }

        .logout-container a:hover {
            color: red;
        }
    </style>
</head>

<body>
    <header>
        <h1>Selamat Datang di Website Kami</h1>
    </header>

    <div class="container">
        {{-- Pencarian --}}
        <div class="row g-3 align-items-center mt-3">
            <div class="col-auto">
                <form action="/user" method="GET">
                    <div class="input-group">
                        <input type="search" id="inputPassword6" placeholder="Cari nama wisata" name="search"
                            class="form-control" aria-describedby="passwordHelpInline">
                        <button type="submit" class="btn btn-outline-secondary">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <br>

        {{-- Destinasi --}}
        @foreach ($destinasis as $key => $destinasi)
            @if (isset($_GET['search']) && !empty($_GET['search']))
                {{-- Filter destinasi berdasarkan pencarian --}}
                @if (stripos($destinasi->wisata, $_GET['search']) !== false)
                    <a href="#" class="card-link">
                        <div class="ticket-card">
                            <img src="{{ asset('storage/'.$destinasi->foto) }}" alt="foto">
                            <h3><strong>{{ $destinasi->wisata }}
                                    <p> Harga Rp. {{ $destinasi->tiket }}</p>
                                </strong></h3>
                            <p><strong>Kategori </strong> {{ $destinasi->genre->genre }}</p>
                            <p><strong>Lokasi </strong> {{ $destinasi->lokasi->lokasi }} </p>

                            <button data-modal-target="tambahdata" data-modal-toggle="tambahdata"
                                class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button">
                                Pesan Tiket
                            </button>
                        </div>
                    </a>
                @endif
            @else
                {{-- Tampilkan semua destinasi jika tidak ada pencarian --}}
                <a href="#" class="card-link">
                    <div class="ticket-card">
                        <img src="{{ asset('storage/'.$destinasi->foto) }}" alt="foto">
                        <h3><strong>{{ $destinasi->wisata }}
                                <p> Harga Rp. {{ $destinasi->tiket }}</p>
                            </strong></h3>
                        <p><strong>Kategori </strong> {{ $destinasi->genre->genre }}</p>
                        <p><strong>Lokasi </strong> {{ $destinasi->lokasi->lokasi }} </p>

                        <button data-modal-target="tambahdata{{$destinasi->id}}" data-modal-toggle="tambahdata{{$destinasi->id}}"
                            class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            type="button">
                            Pesan Tiket
                        </button>
                    </div>
                </a>
            @endif
        

        @if (isset($_GET['search']) && !empty($_GET['search']) && $destinasis->where('wisata', 'like', '%' . $_GET['search'] . '%')->count() === 0)
            <p>Data tidak ditemukan.</p>
        @endif

        {{ $destinasis->links() }}
    </div>




<!-- Main modal -->
<div id="tambahdata{{$destinasi->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  Pesan Tiket Destinasi
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambahdata">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Tutup modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <form class="p-4 md:p-5" action="{{ route('tiket.store') }}" method="post" enctype="multipart/form-data">
            @csrf

                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                    <label for="">Wisata : <p></p></label>
                    <input type="hidden" name="destinasi_id" id="" class="form-control  @error('destinasi_id') is invalid @enderror" value="{{$destinasi->id}}">
                        <input type="text" id="destinasi_id" name="" class="form-control @error('destinasi_id') is-invalid @enderror" value="{{ $destinasi->wisata }}"  readonly>
                    </div>

                <div class="col-span-2">
                  <label for="">Atas Nama : <p></p></label>
                    <input type="text" id="atas_nama" name="atas_nama" class="form-control @error('atas_nama') is-invalid @enderror" value="{{ old('atas_nama') }}">
                    @error('atas_nama')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                </div>

                <div class="col-span-2">
                  <label for="">Tanggal Pergi Wisata : <p></p></label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
                    @error('tanggal')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-span-2">
                  <label for="">Jumlah Tiket : <p></p></label>
                    <input type="number" id="tkt" name="tkt" class="form-control @error('tkt') is-invalid @enderror" value="{{ old('tkt') }}">
                    @error('tkt')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

              </div>

              <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                  Pesan Sekarang
              </button>
          </form>
      </div>
  </div>
</div>

@endforeach

</body>

</html>
@endsection
