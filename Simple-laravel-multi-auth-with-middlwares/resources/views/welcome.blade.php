<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>{{ config('app.name', 'MINDBODY') }}</title>
</head>
<body>
    <header class="vw-100 vh-100" style="background-image: url('{{ asset('img/header-bg.jpg') }}');background-size: cover;
    background-position: center center;">
        <div class="container fixed-top">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" style="color:#c1efde" href="{{ url('/') }}">{{ config('app.name', 'MINDBODY') }}</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" style="color:#c1efde" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#c1efde" href="{{ url('/about-us') }}">About us</a>
                            </li>
                            <li class="nav-item">
                                
                            </li>
                            @if (Route::has('login'))
                                    @auth
                                    <a class="nav-link" style="color:#c1efde" href="{{ url("/logout") }}">Logout</a>
                                    @else
                                        <li class="nav-item">
                                            <a style="color:#c1efde" class="nav-link" href="{{ route('login') }}">Login</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a style="color:#c1efde" class="nav-link" href="{{ route('register') }}">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                            @endif
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row vh-100 w-100 text-light justify-content-center align-items-center">
                <div class="col-12 text-center">
                    <h1 class="display-1"><i><strong>NEVER GIVE UP</strong></i></h1>
                    <h2 class="display-2 text-danger"><i><strong>THE BEST FITNESS FOR YOU</strong></i></h2>
                </div>
            </div>
        </div>
    </header>
    
</body>
</html>