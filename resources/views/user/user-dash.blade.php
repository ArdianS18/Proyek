@extends('layouts.userlayout')

@section('content')

<head>
  <style>
    .row{
      margin: 10px;
      float: left;
    }

    .image-container{
      width: 200px;
      height: 150px;
      overflow: hidden;
    }

    .image-container img{
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

  </style>
</head>
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
<div class="section-title">
  <h2>Daftar Tiket</h2>
  <p>Beli Tiket Wisata Sekarang sebelum kehabisan</p>

    {{-- untuk mencari --}}
    <div class="">
      <div class="col-auto">
          <form action="/user" method="GET">
             <div class="input-group">
                <input type="search" id="inputPassword6" placeholder="Cari nama wisata" name="search" class="form-control" aria-describedby="passwordHelpInline">
                <button type="submit" class="btn btn-outline-secondary">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </button>
              </div>
          </form>
      </div>
    </div>

</div>

@if(count($destinasis) > 0)
    @foreach ($destinasis as $key => $destinasi)
    <div data-aos="zoom-in" data-aos-delay="80">

      <div class="row">
        <div class="icon-box">
          <div class="icon">
            <center>
              <div class="image-container">
                  <img src="{{ asset('storage/'.$destinasi->foto) }}" alt="foto"  width="100px" >
              </div>
            </center>
          </div>
          <h3 class="title"><a href="">{{ $destinasi->wisata }} <br><p> Harga Rp. {{ $destinasi->tiket }}</p></a></h3>
          <p class="description">Kategori {{ $destinasi->genre->genre }} <br>
          Lokasi: {{ $destinasi->lokasi->lokasi }}
          </p>
          <button data-modal-target="tambahdata{{$destinasi->id}}" data-modal-toggle="tambahdata{{$destinasi->id}}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
              Pesan Tiket
          </button>
        </div>
      </div>

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

        </div>
      </div>
    @endforeach
@else
    <div class="text-center mt-5">
        <p>Data tidak ditemukan.</p>
    </div>
@endif


<div class="page d-flex justify-content-end mt-4">
    {{$destinasis->links()}}
</div>


@endsection
