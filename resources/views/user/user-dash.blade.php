@extends('layouts.user-dash')

@section('content')


@foreach ($destinasis as $key => $destinasi)

  <a href="" class="card-link">
    <div class="ticket-card">
      <img src="{{ asset('storage/'.$destinasi->foto) }}" alt="foto">
      <h3><strong>{{ $destinasi->wisata }}</strong></h3>
      <p><strong>Kategori Wisata:</strong> {{ $destinasi->genre->genre }}</p>
      <p><strong>Harga Tiket Anak:</strong> Rp {{ $destinasi->tiket_anak }}</p>
      <p><strong>Harga Tiket Remaja:</strong> Rp {{ $destinasi->tiket_remaja }}</p>
      <p><strong>Harga Tiket Dewasa:</strong> Rp {{ $destinasi->tiket_dewasa }}</p>
    </div>
  </a>

        <a class="card-link">
            <div class="kartu">
                <img src="{{ asset('storage/'.$destinasi->foto) }}" class="card-img-top" width="250px" alt="foto">
                <h3 class="card-title" align="center"><strong>{{ $destinasi->wisata }}</strong></h3>
                <p class="card-text"><strong>Kategori Wisata:</strong> {{ $destinasi->genre->genre }}</p>
                <p class="card-text"><strong>Harga Tiket Anak:</strong> {{ $destinasi->tiket_anak }}</p>
                <p class="card-text"><strong>Harga Tiket Remaja:</strong> {{ $destinasi->tiket_remaja }}</p>
                <p class="card-text"><strong>Harga Tiket Dewasa:</strong> {{ $destinasi->tiket_dewasa }}</p>
            </div>
        </a>
@endforeach




</body>
</html>
