@extends('user.user')

<head>
    <title>Halaman Pesan</title>
</head>

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }


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
      height: 300px; /* Atur tinggi kartu */
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
  </style>
</head>
<body>



@foreach ($tikets as $key => $tiket)

    <a class="card-link">
    <div class="ticket-card">
      <p><strong>Wisata : </strong>{{$tiket->destinasi->wisata}}</p>
      <p><strong>Atas Nama : </strong>{{$tiket->atas_nama }}</p>
      <p><strong>Harga : </strong>Rp. {{ $tiket->destinasi->tiket }}</p>
      <p><strong>Jumlah : </strong>{{ $tiket->tkt }}</p>
      <p><strong>Total Harga : </strong>Rp. {{ $tiket->destinasi->tiket *  $tiket->tkt }}  </p>

        @if ($tiket->status == 'Belum Bayar')
        <button data-modal-target="tambahdata{{$tiket->id}}" data-modal-toggle="tambahdata{{$tiket->id}}" class="text-red-600 border border-red-600 hover:bg-white hover:text-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Bayar Sekarang
        </button>
        @else
        <button class="text-green bg-gradient-to-r from-green-500 to-blue-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" type="button">
            Sudah Bayar
        </button>
        @endif
    </div>
</a>

<div id="tambahdata{{$tiket->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Bayar Tiket Destinasi
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambahdata">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Tutup modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="{{ route('pembayaran.store') }}" method="post" enctype="multipart/form-data">
              @csrf

              <input type="hidden" name="tiket_id" value="{{ $tiket->id }}">

                <div class="col-span-2">
                <label for="">Wisata : <p></p></label>
                <input type="hidden" name="destinasi_id" id="" class="form-control  @error('destinasi_id') is invalid @enderror" value="{{$tiket->destinasi_id}}">
                <input type="text" id="destinasi_id" name="" class="form-control @error('destinasi_id') is-invalid @enderror" value="{{ $tiket->destinasi->wisata}}"  readonly>
                </div>

                    <div class="col-span-2">
                    <label for="">Atas Nama : <p></p></label>
                    <input type="hidden" name="nama" id="" class="form-control  @error('nama') is invalid @enderror" value="{{$tiket->id}}">
                    <input type="text" id="nama" name="" class="form-control @error('nama') is-invalid @enderror" value="{{ $tiket->atas_nama }}"readonly>
                    </div>


                    <div class="col-span-2">
                    <label for="">Bayar : <p></p></label>
                      <input type="text" id="byr" name="byr" class="form-control @error('byr') is-invalid @enderror" value="{{ old('byr') }}">
                      @error('byr')
                      <span class="invalid-feedback" role="alert" style="color: red;">
                          <strong>{{$message}}</strong>
                      </span>
                      @enderror
                    </div>

                    {{-- <div class="col-span-2">

                        <input type="file" id="foto" name="" class="form-control @error('foto') is-invalid @enderror" placeholder="Bukti Foto" value="{{old('foto')}}">
                        @error('foto')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div> --}}

                <br><button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Bayar Sekarang
                </button>
            </form>
        </div>
    </div>
  </div>
@endforeach
</body>
</html>
@endsection
