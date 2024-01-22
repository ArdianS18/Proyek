@extends('layouts.admin')

@section('content')

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data Kategori Destinasi</h1>
        <small>Data Kategori Destinasi</small><br>
        {{-- <a href="/genre/create" class="btn btn-success">+ Tambah Data genre</a><br> --}}

        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahdata">+ Tambah Destinasi</button>

        <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="tambahdataLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahdataLongTitle">Tambah Destinasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                  <form action="{{ route('destinasi.store') }}" method="post">
                      @csrf
                      <label for="">nama Destinasi :</label>
                      <div class="form-group">
                          <input type="text" id="nama_destinasi" name="nama_destinasi" class="form-control @error('nama_destinasi') is-invalid @enderror" placeholder="Kategori Destinasi" value="{{old('nama_destinasi')}}">
                          @error('nama_destinasi')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                          </span>
                          @enderror
                      </div>
                      <label for="">Deskripsi Destinasi :</label>
                      <div class="form-group">
                          <input type="text" id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Kategori Destinasi" value="{{old('deskripsi')}}">
                          @error('nama_destinasi')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                          </span>
                          @enderror
                      </div>
                      <label for="">Lokasi :</label>
                      <div class="form-group">
                          <input type="text" id="lokasi" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" placeholder="Kategori Destinasi" value="{{old('lokasi')}}">
                          @error('lokasi')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                          </span>
                          @enderror
                      </div>
                      <label for="">Harga Tiket :</label>
                      <div class="form-group">
                          <input type="text" id="harga_tiket" name="harga_tiket" class="form-control @error('harga_tiket') is-invalid @enderror" placeholder="Kategori Destinasi" value="{{old('harga_tiket')}}">
                          @error('harga_tiket')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                          </span>
                          @enderror
                      </div>
                      <br><div class="form-group">
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Simpan Ketogori</button>
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
                <th>Nama Destinasi</th>
                <th>Deskripsi</th>
                <th>Lokasi</th>
                <th>Harga Tiket</th>
                <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($destinasis as $key => $destinasi)
            <tbody>
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$destinasi->nama_destinasi}}</td>
                    <td>{{$destinasi->deskripsi}}</td>
                    <td>{{$destinasi->lokasi}}</td>
                    <td>{{$destinasi->harga_tiket}}</td>
                    <td>
                        <a href="/destinasi/{{$destinasi->id}}" type="button" class="btn btn-primary" >Detail</a>
                        {{-- <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning btn-xs">Edit</a> --}}
                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editdata{{$destinasi->id}}">
                            Edit
                        </button>

                        <form action="/destinasi/{{$destinasi->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </td>

                </tr>

                 <!-- Modal Edit -->
        <div class="modal fade" id="editdata{{$destinasi->id}}" tabindex="-1" role="dialog" aria-labelledby="editdata{{$destinasi->id}}LongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdata{{$destinasi->id}}LongTitle">Edit Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('destinasi.update', ['destinasi' => $destinasi->id]) }}" method="post">
                            @method('put')
                            @csrf
                            <label for="">Kategori Destinasi : </label>
                            <div class="form-group">
                                <input type="text" id="destinasi" name="destinasi" class="form-control" placeholder="nama destinasi" value="{{$destinasi->nama_destinasi}}">
                            </div>
                            <div class="form-group">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Simpan Kategori</button>
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
