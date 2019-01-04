<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/3/2019
 * Time: 1:54 PM
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
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
    </nav>
</div>
<div class="md:flex min-h-screen" id="sanaTest-body">
    <div class="w-full md:w-1/2 bg-white flex items-center justify-center">
        <div class="max-w-sm m-8">
            <div class="text-black text-5xl md:text-12xl font-black">
                @yield('heading', __('Form'))
            </div>

            <div class="w-16 h-1 bg-dark-blue my-3 md:my-6"></div>

            <div class="text-grey-darker text-3xl md:text-8xl font-black bg-light">
                @yield('paragraph', __('Fill the followings.'))
            </div>

            <div class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">
                @yield('form')
            </div>

        </div>
    </div>

    <div class="relative pb-full md:flex md:pb-0 md:min-h-screen w-full md:w-1/2">
        @yield('image')
    </div>
</div>
<footer class="main card-footer text-center" id="sanaTest-footer">
    <p class="mx-auto">All Rights Reserved.</p>
</footer>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
        integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
        crossorigin=""></script>

<script src="/js/map.js"></script>
</body>
</html>
