<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/4/2019
 * Time: 10:20 PM
 */ ?>

@extends('layouts.main-layout')

@section('content')
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
@endsection
