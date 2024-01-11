<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" style="height: 150px;" src="{{ asset('assets/img/logo.png') }}" alt="">
                <h1 class="display-5 fw-bold text-body-emphasis">{{ config('app.name', 'Laravel') }}</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">Wallet X is personal finance management software developed using Laravel Framework (Laravel 10).</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    @auth
                    <a  href="{{ url('/home') }}" class="btn btn-primary btn-lg px-4 gap-3">Dashboard</a>
                    @else
                    <a  href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 gap-3">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg px-4">Register</a>
                    @endauth
                  </div>
                </div>
              </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
