@extends('layouts.admin-dash')

@section('content')

<nav>
<div class="container">
<div class="">
<h1>Data Wisata</h1>
<small>Data Wisata</small><br>

 <!-- Modal toggle -->
<button data-modal-target="tambahdata" data-modal-toggle="tambahdata" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
    Tambah Wisata
</button>

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
            <form class="p-4 md:p-5" action="{{ route('destinasi.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <input type="text" id="wisata" name="wisata" class="form-control @error('wisata') is-invalid @enderror" placeholder="Nama Wisata" value="{{old('wisata')}}">
                        @error('wisata')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="genre_id">Kategori Wisata :</label>
                        <select class="form-select @error('genre_id') is-invalid @enderror" name="genre_id" value="{{ old('genre_id')}}" aria-label="Default select example">
                            <option selected>Pilih Kategori</option>
                            @foreach ($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->genre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="lokasi_id">Pilih Lokasi Wisata :</label>
                        <select class="form-select @error('lokasi_id') is-invalid @enderror" name="lokasi_id" value="{{ old('lokasi_id')}}" aria-label="Default select example">
                            <option selected>Pilih Lokasi Wisata</option>
                            @foreach ($lokasis as $lokasi)
                                <option value="{{$lokasi->id}}">{{$lokasi->lokasi}}</option>
                            @endforeach
                        </select>
                        @error('lokasi_id')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <input type="file" id="foto" name="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="Foro Wisata" value="{{old('foto')}}">
                        @error('foto')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="">Harga Tiket:</label>
                        <div class="form-group">
                            <input type="text" id="tiket" name="tiket" class="form-control @error('tiket') is-invalid @enderror" placeholder="Harga Tiket" value="{{old('tiket')}}">
                            @error('tiket')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label for="">Stok:</label>
                        <div class="form-group">
                            <input type="text" id="stok" name="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="Harga stok" value="{{old('stok')}}">
                            @error('stok')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
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

<br><br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Wisata
                </th>
                <th scope="col" class="px-6 py-3">
                    Kategori Wisata
                </th>
                <th scope="col" class="px-6 py-3">
                    Lokasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Foto
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Tiket
                </th>
                <th scope="col" class="px-6 py-3">
                    Stok
                </th>

                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>

            </tr>
        </thead>
        @foreach ($destinasis as $key => $destinasi)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    {{ ++$key }}
                </td>
                <td class="px-6 py-4">
                    {{$destinasi->wisata}}
                </td>
                <td class="px-6 py-4">
                    {{$destinasi->genre->genre}}
                </td>
                <td class="px-6 py-4">
                    {{$destinasi->lokasi->lokasi}}
                </td>
                <td class="px-6 py-4">
                    <img src="{{ asset('storage/'.$destinasi->foto) }}" width="60px" alt="gambar">
                </td>
                <td class="px-6 py-4">
                    Rp. {{ number_format($destinasi->tiket, 0, ',', '.')}}
                </td>
                <td class="px-6 py-4">
                    {{$destinasi->stok}}
                </td>
                <td class="px-6 py-4">


                <!-- Edit Modal toggle -->
                <button data-modal-target="editdata{{$destinasi->id}}" data-modal-toggle="editdata{{$destinasi->id}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2.5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                    </svg>
                </button>

                <!-- Edit Modal -->
                <div id="editdata{{$destinasi->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit data kategori
                    </h3>
                    <button type="button" data-modal-hide="editdata{{$destinasi->id}}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Tutup modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="{{ route('destinasi.update', ['destinasi' => $destinasi->id]) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="wisata" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Wisata</label>
                            <input type="text" id="wisata" name="wisata" class="form-control @error('wisata') is-invalid @enderror" placeholder="wisata Destinasi"  value="{{ old('destinasi', $destinasi->wisata) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name">
                            @error('wisata')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="destinasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Destinasi</label>
                            <select class="form-select @error('genre_id') is-invalid @enderror" name="genre_id" aria-label="Default select example">
                                @foreach ($genres as $genre)
                                    <option  value="{{$genre->id}}" {{$destinasi->genre_id == $genre->id ? 'selected' : ''}}>{{$genre->genre}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-span-2">
                            <label for="destinasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi</label>
                            <select class="form-select @error('lokasi_id') is-invalid @enderror" name="lokasi_id" aria-label="Default select example">
                                @foreach ($lokasis as $lokasi)
                                    <option value="{{$lokasi->id}}" {{$destinasi->lokasi_id == $lokasi->id ? 'selected' : ''}}>{{$lokasi->lokasi}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-span-2">
                            <label for="foto">Foto wisata</label>
                            <input type="file"  class="form-control form-select @error('foto') is-invalid @enderror" name="foto">
                            @error('foto')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="destinasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tiket Anak</label>
                            <input type="text" id="tiket" name="tiket" class="form-control @error('tiket') is-invalid @enderror" placeholder="wisata tiket"  value="{{ old('tiket', $destinasi->tiket) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name">
                            @error('tiket')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="destinasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok Tiket</label>
                            <input type="text" id="stok" name="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="wisata stok"  value="{{ old('stok', $destinasi->stok) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name">
                            @error('stok')
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


                    <form action="/destinasi/{{$destinasi->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
                        @method('delete')
                        @csrf
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2.5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                            </svg>
                        </button>
                    </form>
                </td>
                {{-- <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td> --}}
            </tr>


        </tbody>
        @endforeach
    </table>


</div>

<div class="d-flex justify-content-end mt-4">
    {{$destinasis->links()}}

</div>


</div>
</div>
</nav>
@endsection
