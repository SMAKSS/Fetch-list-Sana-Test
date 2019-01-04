<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/5/2019
 * Time: 3:02 AM
 */ ?>

        <!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'sanaTest')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>

    <!-- Styles -->
    <link href="{{ (mix('css/app.css')) }}" rel="stylesheet">

    <!-- Extra-Packages -->
    @yield('extra-packages')
</head>
<body class="antialiased font-sans">
<div id="sanaTest-nav">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel mx-auto">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Register</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link">/</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/addresses">Address</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

@yield('content')

<footer class="main card-footer text-center" id="sanaTest-footer">
    <p class="mx-auto">All Rights Reserved.</p>
</footer>

@yield('scripts')

</body>
</html>

