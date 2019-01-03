<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/3/2019
 * Time: 1:54 PM
 */?>
<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'sanaTest')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ (mix('css/app.css')) }}" rel="stylesheet">

    <!-- Extra-Packages -->
    @yield('extra-packages')
</head>
<body class="antialiased font-sans">
<div id="sanaTest">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
    </nav>
</div>
<div class="md:flex min-h-screen">
    <div class="w-full md:w-1/2 bg-white flex items-center justify-center">
        <div class="max-w-sm m-8">
            <div class="text-black text-5xl md:text-12xl font-black">
                @yield('heading', __('Form'))
            </div>

            <div class="w-16 h-1 bg-dark-blue my-3 md:my-6"></div>

            <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">
                @yield('form')
            </p>

        </div>
    </div>

    <div class="relative pb-full md:flex md:pb-0 md:min-h-screen w-full md:w-1/2">
        @yield('image')
    </div>
</div>
<footer class="main card-footer text-center">
        <p class="mx-auto">All Rights Reserved.</p>
</footer>
</body>
</html>
