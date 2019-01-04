<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/3/2019
 * Time: 1:52 PM
 */?>
@extends('layouts.form-layout')

@section('title', __('form'))

@section('heading', __('Register'))

@section('paragraph', __('Please fill the following information.'))

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
                <input type="text" class="input {{ $errors->has('forename') ? 'is-danger' : '' }}" name="forename" placeholder="John" required value="{{ old('forename') }}">

                @if($errors->has('forename'))
                    <p class="help is-danger">
                        forename field is required (min:3, max:255)
                    </p>
                @endif

            </div>

        </div>

        <div class="field">

            <label class="label" for="surname">Surname</label>

            <div class="control">
                <input type="text" class="input {{ $errors->has('surname') ? 'is-danger' : '' }}" name="surname" placeholder="Doe" value="{{ old('surname') }}" required>

                @if($errors->has('surname'))
                    <p class="help is-danger">
                        Surname field is required (min:3, max:255)
                    </p>
                @endif

            </div>

        </div>

        <div class="field">

            <label class="label" for="gender">Gender</label>

            <div class="control">
                <label class="radio">
                    <input type="radio" name="gender" value="Male" @if(old('gender') === 'male') checked @endif>
                    Male
                </label>
                <label class="radio">
                    <input type="radio" name="gender" value="Female" @if(old('gender') === 'female') checked @endif>
                    Female
                </label>

                @if($errors->has('gender'))
                    <p class="help is-danger">
                        Gender type is required
                    </p>
                @endif

            </div>
        </div>


        <div class="field">

            <label class="label" for="mobileNumber">Mobile Number</label>

            <div class="control">
                <p class="control has-icons-left has-icons-right">
                    <input type="text" class="input {{ $errors->has('mobileNumber') ? 'is-danger' : '' }}" name="mobileNumber" placeholder="0 - - - - - - - - - - (11 digits)" value="{{ old('mobileNumber') }}" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-mobile-alt"></i>
                    </span>
                </p>

                @if($errors->has('mobileNumber'))
                    <p class="help is-danger">
                        Mobile Number field is required (min:11, max:11)
                    </p>
                @endif

            </div>

        </div>

        <div class="field">

            <label class="label" for="phoneNumber">Phone Number</label>

            <div class="control">
                <p class="control has-icons-left has-icons-right">
                    <input type="text" class="input {{ $errors->has('phoneNumber') ? 'is-danger' : '' }}" name="phoneNumber" placeholder="country code - - - - - - - -" value="{{ old('phoneNumber') }}" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-phone-volume"></i>
                    </span>
                </p>

                @if($errors->has('phoneNumber'))
                    <p class="help is-danger">
                        Phone Number field is required (min:11, max:11)
                    </p>
                @endif

            </div>

        </div>

        <div class="field">

            <label class="label" for="address">Address</label>

            <div class="control">
                <p class="control has-icons-left has-icons-right">
                    <input type="text" class="input {{ $errors->has('address') ? 'is-danger' : '' }}" name="address" placeholder="350 5th Ave New York, NY 10018" value="{{ old('address') }}" required>
                    <span class="icon is-small is-left">
                            <i class="fas fa-map-marked-alt"></i>
                    </span>
                </p>

                @if($errors->has('address'))
                    <p class="help is-danger">
                        Address field is required (min:5, max:255)
                    </p>
                @endif

            </div>

        </div>

        <div class="field">

            <p class="help">
                Please indicate your exact location below:
            </p>

            <div class="control">
                <div id="mapid"></div>
            </div>

        </div>

            <div class="field">

                <label class="label" for="lat">Latitude</label>

                <div class="control">
                    <input type="text" class="input {{ $errors->has('lat') ? 'is-danger' : '' }}" name="lat" id="lat" placeholder="35.6943900" value="{{ old('lat') }}" required>

                    @if($errors->has('lat'))
                        <p class="help is-danger">
                            Latitude is required
                        </p>
                    @endif

                </div>

            </div>

            <div class="field">
                <label class="label" for="lng">Longitude</label>

                <div class="control">
                    <input type="text" class="input {{ $errors->has('lng') ? 'is-danger' : '' }}" name="lng" id="lng" placeholder="51.4215100" value="{{ old('lng') }}" required>

                    @if($errors->has('lng'))
                        <p class="help is-danger">
                            Longitude is required
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
            <a href="{{ url('/addresses') }}" class="control button is-text">
                {{ __('Go to Address List') }}
            </a>
        </div>
    </form>
@endsection
