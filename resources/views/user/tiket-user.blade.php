@extends('user.user')

<head>
    <title>Halaman Tiket</title>
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
      height: 400px; /* Atur tinggi kartu */
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
      <p><strong>Wisata :</strong>{{$tiket->destinasi->wisata}}</p>
      <p><strong>Atas Nama :</strong>{{$tiket->atas_nama }}</p>
      <p><strong>Jumlah Tiket Anak:</strong>{{ $tiket->tkt_anak }}</p>
      <p><strong>Jumlah Tiket Remaja:</strong>{{ $tiket->tkt_remaja }}</p>
      <p><strong>Jumlah Tiket Dewasa:</strong>{{ $tiket->tkt_dewasa }}</p>
       <!-- Modal toggle -->
      <button data-modal-target="tambahdata" data-modal-toggle="tambahdata" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
        Bayar Tiket
      </button>

    </div>
    </a>
@endforeach


<!-- Main modal -->
<div id="tambahdata" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  Tambah data Destinasi
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
                @foreach ($destinasis as $key => $destinasi)
                                <label for="">Wisata : <p></p></label>
                                  <input type="text" id="destinasi_id" name="destinasi_id" class="form-control @error('destinasi_id') is-invalid @enderror" value="{{ $destinasi->id }}" readonly>
                              @endforeach
                                </div>
                              </div>
                          </div>

              <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                  <label for="">Atas Nama : <p></p></label>
                    <input type="text" id="atas_nama" name="atas_nama" class="form-control @error('atas_nama') is-invalid @enderror" value="{{ old('atas_nama') }}">
                    @error('atas_nama')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                </div>

                <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                  <label for="">Tanggal Pergi Wisata : <p></p></label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
                    @error('tanggal')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                </div>

                <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                  <label for="">Jumlah Tiket Anak : <p></p></label>
                    <input type="number" id="tkt_anak" name="tkt_anak" class="form-control @error('tkt_anak') is-invalid @enderror" value="{{ old('tkt_anak') }}">
                    @error('tkt_anak')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                </div>

                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                      <label for="">Jumlah Tiket Remaja : <p></p></label>
                        <input type="number" id="tkt_remaja" name="tkt_remaja" class="form-control @error('tkt_remaja') is-invalid @enderror" value="{{ old('tkt_remaja') }}">
                        @error('tkt_remaja')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    </div>

                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                          <label for="">Jumlah Tiket Dewasa : <p></p></label>
                            <input type="number" id="tkt_dewasa" name="tkt_dewasa" class="form-control @error('tkt_dewasa') is-invalid @enderror" value="{{ old('tkt_dewasa') }}">
                            @error('tkt_dewasa')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>

              <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                  Simpan
              </button>
          </form>
      </div>
  </div>
</div>
</body>
</html>
@endsection
