<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wisata</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
        body{
            background-color: #cfcfcf;
        }
        .containerr {
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(9, 0, 77, 0.65), rgba(9, 0, 77, 0.65)), url('{{ asset('photo/tropical.jpeg') }}');
            background-size: cover;
            background-position: center;
            padding: 10px 8%;
        }
        /* nav{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            position: fixed;
            height: 80px;
        }
        nav ul li{
            display: inline-block;
            margin: 10px 20px;
        }
        nav ul li a{
            color: #fff;
            text-decoration: none;

        } */
        .content{
            margin-top: 14%;
            color: #fff;
            max-width: 620px;
        }
        .content h1{
            font-size: 70px;
            font-weight: 600;
            line-height: 85px;
            margin-bottom: 25px;
        }
        /* .content form{
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 5px;
            padding: 10px;
            margin-top: 30px;
        } */

        nav{
      position: fixed;
      /* background: #ffb2c5; */
      height: 80px;
      width: 100%;
    }
    label.logo{
      color: black;
      font-size: 35px;
      line-height: 80px;
      padding: 0 100px;
      font-weight: bold;
    }
    nav ul{
      float: right;
      margin-right: 20px;
    }
    nav ul li{
      display: inline-block;
      line-height: 80px;
      margin: 0 5px;
    }
    nav ul li a{
      color: rgb(0, 0, 0);
      font-size: 17px;
      font-family: sans-serif;
      padding: 7px 13px;
      border-radius: 3px;
      text-transform: uppercase;
    }

    nav.link{
      float: right;
      margin-right: 20px;

      display: inline-block;
      line-height: 80px;
      margin: 0 5px;

      color: white;
      font-size: 17px;
      padding: 7px 13px;
      border-radius: 3px;
      text-transform: uppercase;
    }
    .nav-link.active {
      display: inline-block;
      line-height: 80px;
      margin: 0 5px;
      padding: 7px 13px;
      border-radius: 3px;
      background-color: #db71a2; /* Set the active link background color */
    }

    li a:hover {
        color: #ffffff !important; /* Warna teks saat dihover */
    }

    .nav-linkk.active {
            background-color: #ffffff; /* Set the active link background color */
    }
    </style>
</head>
<body style="background-color: #ffffff">

    @if (!empty(Auth::user()->profile_image))
        <div  style="width: 50px; height: 50px; overflow: hidden; border-radius: 50%;">
            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Foto Profil" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    @else
    <svg class="w-14 h-14 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M12 20a8 8 0 0 1-5-1.8v-.6c0-1.8 1.5-3.3 3.3-3.3h3.4c1.8 0 3.3 1.5 3.3 3.3v.6a8 8 0 0 1-5 1.8ZM2 12a10 10 0 1 1 10 10A10 10 0 0 1 2 12Zm10-5a3.3 3.3 0 0 0-3.3 3.3c0 1.7 1.5 3.2 3.3 3.2 1.8 0 3.3-1.5 3.3-3.3C15.3 8.6 13.8 7 12 7Z" clip-rule="evenodd"/>
    </svg>
    @endif

    <button data-modal-target="editprofile{{ Auth::user()->id }}" data-modal-toggle="editprofile{{ Auth::user()->id }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
    {{ Auth::user()->name }}
    </button>

    <!-- Main modal -->
    <div id="editprofile{{ Auth::user()->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit Profile
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambahdata">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Tutup modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="{{ route('editprofile.update',  ['editprofile' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="relative flex justify-center items-center">
                        @if (!empty(Auth::user()->profile_image))
                            <div  style="width: 300px; height: 300px; overflow: hidden; border-radius: 50%;">
                                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Foto Profil" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        @else
                            <svg class="w-27 h-27 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 20a8 8 0 0 1-5-1.8v-.6c0-1.8 1.5-3.3 3.3-3.3h3.4c1.8 0 3.3 1.5 3.3 3.3v.6a8 8 0 0 1-5 1.8ZM2 12a10 10 0 1 1 10 10A10 10 0 0 1 2 12Zm10-5a3.3 3.3 0 0 0-3.3 3.3c0 1.7 1.5 3.2 3.3 3.2 1.8 0 3.3-1.5 3.3-3.3C15.3 8.6 13.8 7 12 7Z" clip-rule="evenodd"/>
                            </svg>
                        @endif
                    </div>


                    <br><div class="grid gap-4 mb-4 grid-cols-2">

                        <div class="col-span-2">
                            <label for="profile_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Image : </label>
                            <input type="file" id="profile_image" name="profile_image" placeholder="Type product name">
                            @error('profile_image')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name : </label>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{old('name', Auth::user()->name )}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name">
                            @error('name')
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

    <nav style="background-color: #b7d1f9">

        <label class="logo" style="color: rgb(0, 0, 0)">Wisata</label>
        {{-- <img src="{{ asset('photo/tropical.jpeg') }}" alt=""> --}}
        <ul>
            <li><a class="nav-linkk {{ request()->routeIs('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}">Data Tiket</a></li>
            <li><a class="nav-linkk {{ request()->routeIs('tiket.index') ? 'active' : '' }}" href="{{ route('tiket.index') }}">Tiket Anda</a></li>
            <li><a class="nav-linkk {{ request()->routeIs('ulasan.index') ? 'active' : '' }}" href="{{ route('ulasan.index') }}">Ulasan</a></li>
            <li><a  href="{{ route('logout') }}/login"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
            </li>
        </ul>
        {{-- <button><img src="{{asset('photo/tropical.jpeng')}}" alt=""></button> --}}
    </nav><br><br>

    <div class="containerr">


    <div class="content">
        <h1>Selamat Datang di Wisata</h1>
        <p>ini tentang website pesan tiket</p>
            {{-- <form action="">
                <input type="text" placeholder="name">
                <button type="submit"></button>
            </form> --}}
    </div>

</div>

@yield('content')
</body>
</html>

<style>
    /* Add CSS styles for the header image container and image */
    .header-image-container {
        position: relative;
        height: 400x;
        overflow: hidden;
    }

    .header-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
