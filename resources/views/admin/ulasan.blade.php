@extends('layouts.admin-dash')

@section('content')

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data Review</h1>
        <small>Data Review</small><br><br>


        <table class="table table-bordered">
            <thead>
                <tr>
                <th>No</th>
                <th>Rivew user</th>
                <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($ulasans as $key => $ulasan)
            <tbody>
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$ulasan->ulasan}}</td>
                    <td>
                        {{-- <a href="/genre/{{$ulasan->id}}" type="button" class="btn btn-primary"><i class="fa fa-book"></i></a>    --}}
                        {{-- <a href="/genre/{{$ulasan->id}}/edit" class="btn btn-warning btn-xs">Edit</a> --}}
                        {{-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editdata{{$ulasan->id}}">
                            <i class="fa fa-edit"></i>
                        </button> --}}

                        <form action="/ulasan/{{$ulasan->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
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
</nav>
@endsection
