<?php

namespace App;

use App\HTTPClient\HTTPClient;
use App\Resources\PostsResource;
use App\Resources\UsersResource;

class JsonApi extends HTTPClient
{
    protected string $baseUrl = 'https://jsonplaceholder.typicode.com';

    public function __construct(string $baseUrl = null)
    {
        $this->baseUrl = $baseUrl ?? $this->baseUrl;
    }

    public function users() : UsersResource {
        return new UsersResource($this);
    }

    public function posts() : PostsResource {
        return new PostsResource($this);
    }
}