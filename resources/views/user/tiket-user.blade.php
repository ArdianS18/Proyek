@extends('layouts.userlayout')

@section('content')

<head>
  <style>

    .row{
    margin: 10px;
    float: left;
    }
    .cart{
    width: 290px;
    }
    .icon-box{
    height: 400px;
    }
  </style>
</head>
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
<div class="section-title">
  <h2>History Tiket</h2>
  <p>Beli Tiket Wisata Sekarang sebelum kehabisan</p>
</div>

@foreach ($tikets as $key => $tiket)

{{-- <br><br><br><br><br> --}}
<div class="container">

{{-- <h1 align="center">History Pemesanan</h1> --}}

<div class="row">
  <div class="cart" data-aos="zoom-in" data-aos-delay="100">
    <div class="icon-box">
      {{-- <div class="icon"><i class="bx bxl-dribbble"></i></div> --}}
      <h4 class="title"><a href="">Wisata : {{$tiket->destinasi->wisata}}</a></h4>
      <p class="description">Atas Nama : {{$tiket->atas_nama }} <br> Harga : Rp. {{number_format( $tiket->destinasi->tiket, 0,',', '.' )}}
      <br> Jumlah Tiket : {{ $tiket->tkt }}
      <br>Total Harga : </strong>Rp. {{number_format($tiket->destinasi->tiket *  $tiket->tkt, 0, ',', '.')}}
      <br>Jadwal : {{\Carbon\Carbon::parse($tiket->tanggal)->isoFormat('D MMMM Y')}}
    </p><br>

    @if ($tiket->status == 'Belum Bayar')
    <button data-modal-target="tambahdata{{$tiket->id}}" data-modal-toggle="tambahdata{{$tiket->id}}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button">
        Bayar Sekarang
    </button>
    @elseif ($tiket->terima == "Tidak Diterima")
      <button data-modal-target="editbayar{{$tiket->id}}" data-modal-toggle="editbayar{{$tiket->id}}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button">
          Bayar Ulang Sekarang
      </button>
    @else
    <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
        Sudah Bayar
    </button>
    @endif

    @if ($tiket->alasan == "Tidak Ada" && $tiket->terima == "Pemesanan")
      <button class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900" type="button">
          Pemesanan
      </button>
      @elseif ($tiket->terima == "Diterima")
      <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
          Diterima
      </button>
      @else
      <button data-modal-target="lihatalasan{{$tiket->id}}" data-modal-toggle="lihatalasan{{$tiket->id}}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button">
          Tidak Diterima
      </button>
      @endif
    </div>
  </div>
</div>
</div>



<div id="editbayar{{$tiket->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
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
          {{-- @foreach ($pembayarans as $key => $byr) --}}
          @foreach ($pembayarans as $key => $bayar)
          @if ($bayar->tiket_id == $tiket->id)
          <form class="p-4 md:p-5" action="{{ route('pembayaran.update', ['pembayaran' => $bayar->id]) }}" method="POST" enctype="multipart/form-data">
          @method('put')
          @csrf

          <input type="hidden" name="tiket_id" value="{{ $tiket->id }}">

          <div class="col-span-2">
              <label for="destinasi">Wisata : </label>
              <input type="hidden" name="destinasi_id" class="form-control @error('destinasi_id') is-invalid @enderror" value="{{ $bayar->destinasi_id }}">
              <input type="text" id="destinasi_id" class="form-control @error('destinasi_id') is-invalid @enderror" value="{{ $bayar->destinasi->wisata }}" readonly>
          </div>

          <br><div class="col-span-2">
              <label for="nama">Atas Nama : </label>
              <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $tiket->atas_nama }}" readonly>
          </div>

          {{-- <br><div class="col-span-2">
              <label for="byr">Bayar Ulang : </label>
              <input type="text" id="byr" name="byr" class="form-control @error('byr') is-invalid @enderror" value="{{ old('byr', $bayar->byr) }}">
              @error('byr')
                  <span class="invalid-feedback" role="alert" style="color: red;">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div> --}}

          <br><div class="col-span-2">
              <label for="foto">Foto Bukti Anda : </label>
              <br><img src="{{ asset('storage/'.$bayar->foto) }}" width="350px" alt="gambar">
              <br><label for="">Ganti Bukti Foto Anda : </label>
              <input type="file" class="form-control form-select @error('foto') is-invalid @enderror" name="foto">
              @error('foto')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <br>
          <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
              Bayar Ulang Sekarang
          </button>
      </form>
      @endif
       @endforeach
      </div>
  </div>
</div>

<div id="lihatalasan{{$tiket->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  Alasan Pemilik
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambahdata">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Tutup modal</span>
              </button>

              <input type="hidden" name="tiket_id" value="{{ $tiket->id }}">
              <div class="p-4md:p-5">
              <div class="col-span-2">
              <label for="">Alasan Pemilik : </label>
              <input type="text" name="" class="form-control @error('destinasi_id') is-invalid @enderror" value="{{ $tiket->alasan}}"  readonly>
          </div>
      </div>
          </div>
      </div>
  </div>
</div>



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
              <label for="">Wisata : </label>
              <input type="hidden" name="destinasi_id" id="" class="form-control  @error('destinasi_id') is invalid @enderror" value="{{$tiket->destinasi_id}}">
              <input type="text" id="destinasi_id" name="" class="form-control @error('destinasi_id') is-invalid @enderror" value="{{ $tiket->destinasi->wisata}}"  readonly><br>
              </div>

                  <div class="col-span-2">
                  <label for="">Atas Nama : </label>
                  <input type="hidden" name="nama" id="" class="form-control  @error('nama') is invalid @enderror" value="{{$tiket->id}}">
                  <input type="text" id="nama" name="" class="form-control @error('nama') is-invalid @enderror" value="{{ $tiket->atas_nama }}"readonly><br>
                  </div>


                  <div class="col-span-2">
                    <label for="">Total Harga : </label>
                    <input type="hidden" name="nama" id="" class="form-control  @error('nama') is invalid @enderror" value="{{$tiket->id}}">
                      <input type="text" id="totalharga" name="totalharga" class="form-control @error('totalharga') is-invalid @enderror" value="Rp. {{number_format ($tiket->destinasi->tiket *  $tiket->tkt), 0, ',', '.' }}" readonly><br>
                      @error('totalharga')
                      <span class="invalid-feedback" role="alert" style="color: red;">
                          <strong>{{$message}}</strong>
                      </span>
                      @enderror
                    </div>

                  {{-- <div class="col-span-2">
                  <label for="">Bayar : </label>
                    <input type="text" id="byr" name="byr" class="form-control @error('byr') is-invalid @enderror" value="{{ old('byr') }}"><br>
                    @error('byr')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                  </div> --}}

                  <div class="col-span-2">
                      <label for="">Bukti Pembayaran</label>
                      <input type="file" name="foto" class="form-control @error('foto') is-infalid @enderror"><br>
                      @error('foto')
                      <span class="invalid-feedback" role="alert" style="color: red;">
                          <strong>{{$message}}</strong>
                      </span>
                      @enderror
                  </div>

              <br><button type="submit" onclick="return confirm('Yakin Akan membayar?')" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                  Bayar Sekarang
              </button>
          </form>
      </div>
  </div>
</div>

@endforeach

@endsection
