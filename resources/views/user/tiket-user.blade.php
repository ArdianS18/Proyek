@extends('user.user')

<head>
    <title>Halaman Tiket</title>
</head>

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }


    .logout-container {
      display: flex;
      align-items: center;
    }

    .logout-container a {
      color: #000000;
      text-decoration: none;
      margin-left: 15px;
    }

    .logout-container a:hover {
      background-color: red;
    }

    .ml-auto {
      margin-left: auto;
    }

    .card-link {
      text-decoration: none;
      color: inherit;
      display: inline-block;
    }

    .ticket-card {
      background-color: #fff;
      padding: 20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
      width: 300px; /* Atur lebar kartu */
      height: 400px; /* Atur tinggi kartu */
      text-align: center;
    }

    .ticket-card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      transform: translateY(-5px);
    }

    .ticket-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
    }

    .ticket-card h3 {
      margin-top: 15px;
    }

    .ticket-card p {
      margin: 8px 0;
    }

    .ticket-card strong {
      color: #007bff;
    }
  </style>
</head>
<body>



@foreach ($tikets as $key => $tiket)

    <a class="card-link">
    <div class="ticket-card">
      <p><strong>Wisata :</strong>{{$tiket->destinasi->wisata}}</p>
      <p><strong>Atas Nama :</strong>{{$tiket->atas_nama }}</p>
      <p><strong>Jumlah Tiket Anak:</strong>{{ $tiket->tkt_anak }}</p>
      <p><strong>Jumlah Tiket Remaja:</strong>{{ $tiket->tkt_remaja }}</p>
      <p><strong>Jumlah Tiket Dewasa:</strong>{{ $tiket->tkt_dewasa }}</p>
      <p class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
        {{ $tiket->status }}
      </p>

    </div>
    </a>
@endforeach
</body>
</html>
@endsection
