<?php

namespace sanaTest\Http\Controllers;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class showAddresses extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();

        $connection = $this->is_connected();

        if ($connection) {
            $response = $client->get('http://dev.achareh.ir/api/karfarmas/address',
                ['auth' => ['karfarma_test', '12345678']]);
            return view('addresses', ['addresses' => json_decode($response->getBody())]);
        } else {
            return view('exceptions.503');
        }
    }
}
