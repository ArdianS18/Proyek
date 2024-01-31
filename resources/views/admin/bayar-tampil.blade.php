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
                            <th scope="col" class="px-6 py-3">
                                Pembayaran
                            </th>
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
                                {{$bayar->byr}}
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/'.$bayar->foto) }}" width="60px" alt="gambar">
                            </td>
                            <td class="px-6 py-4">
                                {{$bayar->tiket->status}}
                            </td>
                            <td class="px-6 py-4">
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
