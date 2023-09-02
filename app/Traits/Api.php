<?php

namespace App\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Request;

trait Api
{
    function getToken()
    {
        $key = session('token');
        return $key;
    }

    function apiGet($url)
    {
        $key = $this->getToken();
        $this->client = new Client();

        $url = env('API_URL') . $url;
        $response = $this->client->request('GET', $url, [
            'setEncodingType' => false,
            'headers' => [
                'Authorization' => $key,
            ]
        ]);

        $results = json_decode($response->getBody());

        return $results;
    }

    function apiPost($url, $data=[])
    {
        $key = $this->getToken();
        $this->client = new Client();

        $url = env('API_URL') . $url;
        $response = $this->client->request('POST', $url, [
            'setEncodingType' => false,
            'headers' => [
                'Authorization' => $key,
            ],
            'form_params' => $data
        ]);

        $results = json_decode($response->getBody());

        return $results;
    }

}