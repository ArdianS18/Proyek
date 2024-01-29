@extends('layouts.admin-dash')

@section('content')

{{-- <head>
    <title>Kategori Destinasi</title>
</head> --}}

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data Tiket Pemesanan</h1>
        <small>Data Tiket Pemesanan</small><br><br>

        {{-- <div class="row g-3 align-items-center mt-3">
            <div class="col-auto">
                <form action="{{route('tiket.index')}}" method="GET">
                <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                </form>
            </div>
        </div> --}}

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Destinasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pemesan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Keberangkatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah tiket
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Pesanan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>

                        </tr>
                    </thead>
                    @foreach ($tikets as $key => $tiket)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ ++$key }}
                            </td>
                            <td class="px-6 py-4">
                                {{$tiket->destinasi->wisata}}
                            </td>
                            <td class="px-6 py-4">
                                {{$tiket->atas_nama}}
                            </td>
                            <td class="px-6 py-4">
                                {{$tiket->tanggal}}
                            </td>
                            <td class="px-6 py-4">
                                {{$tiket->tkt}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $tiket->destinasi->tiket *  $tiket->tkt }}
                            </td>

                            <td class="px-6 py-4">
                                {{$tiket->created_at}}
                            </td>
                            <td class="px-6 py-4">
                                {{$tiket->status}}
                            </td>

                            <td class="px-6 py-4">
                            <!-- Edit Modal toggle -->
                            <button data-modal-target="editdata{{$tiket->id}}" data-modal-toggle="editdata{{$tiket->id}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2.5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                                </svg>
                            </button>


                            <!-- Edit Modal -->
        <div id="editdata{{$tiket->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Detail
                </h3>
                <button type="button" data-modal-hide="editdata{{$tiket->id}}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Tutup modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <p><strong>Destinasi :</strong>{{ $tiket->destinasi->wisata }}</p>
            <p><strong>Nama Pemesan :</strong>{{ $tiket->atas_nama }}</p>
            <p><strong>Tanggal Keberangkatan :</strong>{{ $tiket->tanggal }}</p>
            <p><strong>Jumlah Tiket Anak :</strong>{{ $tiket->tkt_anak }}</p>
            <p><strong>Jumlah Tiket Remaja :</strong>{{ $tiket->tkt_remaja }}</p>
            <p><strong>Jumlah Tiket Desawa :</strong>{{ $tiket->tkt_dewasa }}</p>
            <p><strong>Tanggal Pemesanan :</strong>{{ $tiket->created_at }}</p>

            <form class="p-4 md:p-5" action="{{ route('tiket.update', ['tiket' => $tiket->id]) }}" method="post">
                @method('put')
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status tiket :</label>
                        <select name="status" id="" class="form-control @error('status') is-invalid @enderror" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Pemesanan" <?php if($tiket['status'] == 'Pemesanan'){echo 'selected';}?>>Pemesanan</option>
                            <option value="Diterima" <?php if($tiket['status'] == 'Diterima'){echo 'selected';}?>>Diterima</option>
                        </select>
                        @error('status')
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


                                    <form action="/tiket/{{$tiket->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2.5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg>
                                        </button>
                                    </form>
                            </td>
                        </tr>


                    </tbody>
                    @endforeach
                </table>
            </div>




</div>
</div>
</nav>
@endsection
