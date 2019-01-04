<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/3/2019
 * Time: 1:54 PM
 */ ?>

@extends('layouts.main-layout')

@section('content')
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
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
            integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
            crossorigin=""></script>
    <script src="/js/map.js"></script>
@endsection