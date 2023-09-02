<?php

namespace App\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Cookie;

trait Api
{
    function getToken($useToken=false)
    {
        $key = $useToken ? $_COOKIE['auth_'] : null;

        return $key;
    }

    function apiGet($url, $useToken=false)
    {
        $key = $this->getToken($useToken);
        $this->client = new Client();
        $url = env('API_URL') . $url;
        $response = $this->client->request('GET', $url, [
            'setEncodingType' => false,
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' .$key,
            ]
        ]);

        $results = json_decode($response->getBody());

        return $results;
    }

    function apiPost($url, $data=[], $useToken=false)
    {
        $key = $this->getToken($useToken);
        $this->client = new Client();

        $url = env('API_URL') . $url;
        $response = $this->client->request('POST', $url, [
            'setEncodingType' => false,
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$key,
            ],
            'form_params' => $data
        ]);

        $results = json_decode($response->getBody());

        return $results;
    }

}