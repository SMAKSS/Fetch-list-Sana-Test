<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/3/2019
 * Time: 1:52 PM
 */?>
@extends('layouts.form-layout')

@section('title', __('form'))

@section('extra-packages')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" type="text/css">
@endsection

@section('heading', __('Register'))

@section('image')
    <div style="background-image: url({{ asset('/svg/403.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('form')
    <form action="/" method="post">
        @csrf

        <div class="field">

            <label class="label" for="forename">Forename</label>

            <div class="control">
                <p class="control has-icons-left has-icons-right">
                    <input type="text" class="input {{ $errors->has('forename') ? 'is-danger' : '' }}" name="forename" placeholder="forename" required value="{{ old('forename') }}">
                    <span class="icon is-small is-left">
                        <i class="fas fa-align-justify"></i>
                    </span>
                </p>
            </div>

            @if($errors->has('forename'))
                <p class="help is-danger">
                    forename field is required (min:5, max:30)
                </p>
            @endif

        </div>

        <div class="field">

            <label class="label" for="email">Email</label>

            <div class="control">
                <p class="control has-icons-left has-icons-right">
                    <input type="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" placeholder="example@FitPurchase.com" required value="{{ old('email') }}">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                </p>
            </div>

            @if($errors->has('email'))
                <p class="help is-danger">
                    Email field is required and must should something like "example@FitPurchase.com"
                </p>
            @endif

        </div>

        <div class="field">

            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea type="text" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Write what you want!" required>{{ old('description') }}</textarea>

                @if($errors->has('description'))
                    <p class="help is-danger">
                        Description field is required (min:10, max:255)
                    </p>
                @endif

            </div>

        </div>

        <div class="field">

            <div class="control">
                <i class="fas fa-info-circle"></i>
                <p class="help" style="display:inline-block;">All fields are required!</p>
            </div>

        </div>

        @include('errors.form-errors')

        @include('messages.message-form')

        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link" style="border-radius: 3px;">Submit</button>
            </div>
            <a href="{{ url('/') }}" class="control button is-text">
                {{ __('Go Home') }}
            </a>
        </div>

    </form>
@endsection
