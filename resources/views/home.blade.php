<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/favicon.png')}}">

    <title>Siiimon T-Shirt</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{asset('album.css')}}" rel="stylesheet">
    <link href="{{asset('tshirt.css')}}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>

<body>

@include('header')
<main>
      @yield('content')
</main>

<footer class="text-body-secondary py-5">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Mon T-Shirt</p>
    </div>
</footer>
<script src="{{ asset('bootstrap.bundle.min.js')}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
