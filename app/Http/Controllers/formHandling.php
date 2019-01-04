<?php

namespace sanaTest\Http\Controllers;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use \GuzzleHttp\Client;

class formHandling extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'forename' => ['required', 'min:3', 'max:255'],
            'surname' => ['required', 'min:3', 'max:255'],
            'gender' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'mobileNumber' => ['required', 'min:11', 'max:11'],
            'phoneNumber' => ['required', 'min:11', 'max:11'],
            'address' => ['required', 'min:5' , 'max:255'],
        ]);

        $response = $this->postDataToAPI($attributes);

        return back()->with('message', 'Thank you for your consideration, your message submitted successfully! Your submitted address is' .$response);
    }

    /**
     * Send Data Through API.
     *
     * @param $attributes array
     * @return mixed
     */
    public function postDataToAPI($attributes)
    {
        $client = new Client();
            $response = $client->post('http://dev.achareh.ir/api/karfarmas/address', [
                    'headers' => ['Content-type' => 'application/json'],
                    'auth' => ['karfarma_test', '12345678'],
                    'json' => ['region' => 1,
                        'address' => $attributes['address'],
                        'lat' => $attributes['lat'],
                        'lng' => $attributes['lng'],
                        'coordinate_mobile' => $attributes['mobileNumber'],
                        'coordinate_phone_number' => $attributes['phoneNumber'],
                        'first_name' => $attributes['forename'],
                        'last_name' => $attributes['surname'],
                        'gender' => $attributes['gender']]
                ]
            );

        return $response->getBody();
    }
}
