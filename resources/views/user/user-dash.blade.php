<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #333;
      overflow: hidden;
      transition: background-color 0.3s;
    }

    .navbar:hover {
        background-color: #0d77e1;
        background-image: linear-gradient(to right, #6998f6, #2d2d2e);
    }

    .navbar:not(.hovered) {
      background-color: transparent !important;
    }

    .navbar a {
      float: left;
      display: block;
      color: #0d0d0d;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: rgb(249, 243, 243);
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
  </style>
</head>
<body>

<div class="navbar" onmouseover="addHoverClass()" onmouseout="removeHoverClass()">
    <a href="#news">Home</a>
  <a href="#home">List Of Movies</a>
  <a href="#news">History Of Tickets Film</a>
    <div class="logout-container ml-auto">
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </div>
</div>

<script>
  function addHoverClass() {
    document.querySelector('.navbar').classList.add('hovered');
  }

  function removeHoverClass() {
    document.querySelector('.navbar').classList.remove('hovered');
  }
</script>

</body>
</html>


