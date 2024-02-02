@extends('layouts.admin-dash')

@section('content')

<head>
    <title>Pembayaran</title>
</head>

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data Pembayaran</h1>
        <small>Data Pembayaran</small><br>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Destinasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Harga
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Pembayaran
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Bukti Foto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th  scope="col" class="px-6 py-3">
                                Aksi
                            </th>

                        </tr>
                    </thead>
                    @foreach ($bayars as $key => $bayar)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ ++$key }}
                            </td>
                            <td class="px-6 py-4">
                                {{$bayar->tiket->atas_nama}}
                            </td>
                            <td class="px-6 py-4">
                                {{$bayar->destinasi->wisata}}
                            </td>
                            <td class="px-6 py-4">
                                Rp. {{ number_format($bayar->totalharga, 0, ',', '.')}}
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/'.$bayar->foto) }}" width="60px" alt="gambar">
                            </td>
                            <td class="px-6 py-4">
                                {{$bayar->tiket->status}}
                            </td>
                            <td class="px-6 py-4">
                                <button data-modal-target="lihat{{$bayar->id}}" data-modal-toggle="lihat{{$bayar->id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2.5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4 6-9 6s-9-4.8-9-6c0-1.2 4-6 9-6s9 4.8 9 6Z"/>
                                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                      </svg>
                                </button>

                                <!-- Edit Modal -->
            <div id="lihat{{$bayar->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Detail
                    </h3>
                    <button type="button" data-modal-hide="lihat{{$bayar->id}}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Tutup modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="container">
                <table>
                    <div class="grid gap-4 mb-3 grid-cols-2">
                        <div class="col-span-2">

                                <tr>
                                    <td><p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Atas Nama : </strong>{{ $bayar->tiket->atas_nama }}</p></td>

                                </tr>
                                <tr>
                                    <td>  <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Destinasi : </strong>{{ $bayar->destinasi->wisata }}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Total Harga : </strong>Rp. {{ number_format($bayar->totalharga, 0, ',', '.')}}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Pembayaran : </strong>{{ $bayar->byr }}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Status : </strong>{{$bayar->tiket->status}}</p></td>
                                </tr>
                                <tr>
                                    <td>
                                        <br>
                                        <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Bukti Foto : </strong></p>
                                        <br><img src="{{ asset('storage/'.$bayar->foto) }}" width="350px" alt="gambar"><br>
                                    </td>
                                </tr>

                        </div>
                    </div>
                </table>
                </div>
            </div>
        </div>
    </div>




                                <form action="/pembayaran/{{$bayar->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2.5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
    </div>
</div>
</nav>
@endsection
