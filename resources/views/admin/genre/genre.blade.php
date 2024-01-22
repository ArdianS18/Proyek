
@extends('layouts.admin')

@section('content')

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data genre</h1>
        <small>Data genre</small><br>
        {{-- <a href="/genre/create" class="btn btn-success">+ Tambah Data genre</a><br> --}}

        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahdata">+ Tambah Genre Film</button>

        <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="tambahdataLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahdataLongTitle">Tambah Devisi Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                  <form action="{{ route('genre.store') }}" method="post">
                      @csrf
                      <label for="">Genre Film :</label>
                      <div class="form-group">
                          <input type="text" id="genre" name="genre" class="form-control" placeholder="Genre Film" value="{{old('genre')}}">
                      </div>
                      <br><div class="form-group">
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Simpan Genre Film</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </form>
              </div>
            </div>
          </div>
        </div>



        <table class="table table-bordered">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama Genre</th>
                <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($genres as $key => $genre)
            <tbody>
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$genre->genre}}</td>
                    <td>
                        <a href="/genre/{{$genre->id}}" type="button" class="btn btn-primary" >Detail</a>
                        <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning btn-xs">Edit</a>

                        <form action="/genre/{{$genre->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
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
