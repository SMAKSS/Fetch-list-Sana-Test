<?php
/**
 * Created by PhpStorm.
 * User: SMAKSS
 * Date: 1/4/2019
 * Time: 9:49 PM
 */?>
@extends('layouts.addresses-layout')

@section('information')
    @foreach($addresses as $index => $address)
            <div class="card my-2">
                <div class="card-body">
                    <div class="card-deck text-center mx-auto my-auto">
                        <div class="col-lg-3 col-md-3 col-xl-3 col-sm-12">
                            <span class="text-left text-black-50">No.</span>
                            {{ $index }}
                        </div>
                        <div class="col-lg-3 col-md-3 col-xl-3 col-sm-12">
                            <span class="text-left text-black-50">Full Name:</span>
                            {{ $address->first_name }} {{ $address->last_name }}
                        </div>
                        <div class="col-lg-3 col-md-3 col-xl-3 col-sm-12">
                            <span class="text-left text-black-50">Mobile Number:</span>
                            {{ $address->coordinate_mobile }}
                        </div>
                        <div class="col-lg-3 col-md-3 col-xl-3 col-sm-12">
                            <span class="text-left text-black-50">Address:</span>
                        {{ $address->address }}
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
@endsection