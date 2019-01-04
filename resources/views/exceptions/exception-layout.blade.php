<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/5/2019
 * Time: 12:03 AM
 */ ?>

@extends('layouts.main-layout')

@section('content')
    <div class="md:flex min-h-screen">
        <div class="w-full md:w-1/2 bg-white flex items-center justify-center">
            <div class="max-w-sm m-8">
                <div class="text-black text-5xl md:text-15xl font-black">
                    @yield('code', __('Oh no'))
                </div>

                <div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>

                <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">
                    @yield('message')
                </p>

                <a href="{{ url('/') }}">
                    <button class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">
                        {{ __('Go Home') }}
                    </button>
                </a>
            </div>
        </div>

        <div class="relative pb-full md:flex md:pb-0 md:min-h-screen w-full md:w-1/2">
            @yield('image')
        </div>
    </div>
@endsection
