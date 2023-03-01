<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NETOFLIX</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">NETOFLIX  <span class="sr-only">(current)</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/')}}">Now Playing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/popular')}}">Popular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/top-rated')}}">Top Rated</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/up-coming')}}">Up Coming</a>
                    </li>
                    </ul>
                <div class="form-inline my-2 my-lg-0">
                    {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tambah Film</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kelola List</a>
                        </li>
                </div>
                </div>
            </nav>

        <main class="py-4">
            <header class="ml-3">
                <h2>Now Playing</h2>
            </header>
            <div class="container">
                <div class="row">
                    @foreach($now->results as $dt)
                    <div class="col-4"  style="padding-bottom: 3rem">
                        <div class="card">
                            {{-- <img src="{{$dt->backdrop_path}}"> --}}
                            <div class="card-header" style="height: 6rem">
                            <h5 class="card-title">{{$dt->original_title}}</h5>
                            </div>
                            <div class="card-body"style="height: 20rem">
                            <p class="card-text" style="padding-top: 10rem">{{Str::limit($dt->overview), 20}}</p>
                            <a href="#" class="btn btn-primary">Rating : <span class="badge badge-light">{{$dt->vote_average}}</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
        </main>
    </div>
    </body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
