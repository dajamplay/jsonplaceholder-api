<?php

namespace App\Resources;

use App\HTTPClient\HTTPClient;

abstract class Resource
{
    protected HTTPClient $client;

    public function __construct(HTTPClient $client)
    {
        $this->client = $client;
    }

}