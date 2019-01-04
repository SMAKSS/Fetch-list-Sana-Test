<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/4/2019
 * Time: 10:20 PM
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" type="text/css">

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

<div class="container my-5">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <p class="has-icons-left has-icons-right">
            <a class="button is-small is-light" href="#sanaTest-footer">Go to Bottom
                <i class="ml-1 fas fa-arrow-down"></i>
            </a>
        </p>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        @yield('information')
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <p class="has-icons-left has-icons-right">
            <a class="button is-small is-light" href="#sanaTest-nav">Go to Top
                <i class="ml-1 fas fa-arrow-up"></i>
            </a>
        </p>
    </div>
</div>

<footer class="main card-footer text-center" id="sanaTest-footer">
    <p class="mx-auto">All Rights Reserved.</p>
</footer>

</body>
</html>
