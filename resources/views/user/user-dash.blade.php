@extends('layouts.user-dash')

<head>
    <title>Halaman Tiket</title>
</head>

@section('content')


@foreach ($destinasis as $key => $destinasi)

  <a class="card-link">
    <div class="ticket-card">
      <img src="{{ asset('storage/'.$destinasi->foto) }}" alt="foto">
      <h3><strong>{{ $destinasi->wisata }}</strong></h3>
      <p><strong>Kategori Wisata:</strong> {{ $destinasi->genre->genre }}</p>
      <p><strong>Lokasi Wisata:</strong> {{ $destinasi->lokasi->lokasi }}</p>
      <p><strong>Harga Tiket Anak:</strong> Rp {{ $destinasi->tiket_anak }}</p>
      <p><strong>Harga Tiket Remaja:</strong> Rp {{ $destinasi->tiket_remaja }}</p>
      <p><strong>Harga Tiket Dewasa:</strong> Rp {{ $destinasi->tiket_dewasa }}</p>
    </div>
  </a>
@endforeach
@endsection
