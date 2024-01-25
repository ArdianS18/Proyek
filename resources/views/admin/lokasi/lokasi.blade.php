@extends('layouts.admin-dash')

@section('content')

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data Lokasi Wisata</h1>
        <small>Data Lokasi Wisata</small><br>

        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahdata">+ Tambah Lokasi Wisata</button>

        <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="tambahdataLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahdataLongTitle">Tambah Lokasi Wisata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                  <form action="{{ route('lokasi.store') }}" method="post">
                      @csrf
                      <label for="">Ketegori Wisata :</label>
                      <div class="form-group">
                          <input type="text" id="lokasi" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" placeholder="Lokasi Wisata" value="{{old('lokasi')}}">
                          @error('lokasi')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                              <strong>{{$message}}</strong>
                          </span>
                          @enderror
                      </div>
                      <br><div class="form-group">
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Simpan Lokasi</button>
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
                <th>Lokasi Destinasi</th>
                <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($lokasis as $key => $lokasi)
            <tbody>
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$lokasi->lokasi}}</td>
                    <td>
                        {{-- <a href="/genre/{{$genre->id}}" type="button" class="btn btn-primary"><i class="fa fa-book"></i></a>    --}}
                        {{-- <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning btn-xs">Edit</a> --}}
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editdata{{$lokasi->id}}">
                            <i class="fa fa-edit"></i>
                        </button>

                            <form action="/lokasi/{{$lokasi->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>

                    </td>

                </tr>

                 <!-- Modal Edit -->
        <div class="modal fade" id="editdata{{$lokasi->id}}" tabindex="-1" role="dialog" aria-labelledby="editdata{{$lokasi->id}}LongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdata{{$lokasi->id}}LongTitle">Edit Lokasi Wisata</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('lokasi.update', ['lokasi' => $lokasi->id]) }}" method="post">
                            @method('put')
                            @csrf
                            <label for="">Lokasi Wisata : </label>
                            <div class="form-group">
                                <input type="text" id="lokasi" name="lokasi" class="form-control" placeholder="Genre Film" value="{{$lokasi->lokasi }}">
                            </div>
                            <div class="form-group">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Simpan Lokasi</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </tbody>
@endforeach
</table>
</div>
</div>
</nav>
@endsection
