<?php

namespace App\HTTPClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class HTTPClient
{
    protected string $baseUrl = '';

    /**
     * @throws GuzzleException
     */
    public function send(string $path, string $method = 'GET', array $data = [])
    {
        $client = new Client(['verify' => false ]);
        $response = $client->request($method, $this->baseUrl . $path, $data);
        return json_decode($response->getBody());
    }
}