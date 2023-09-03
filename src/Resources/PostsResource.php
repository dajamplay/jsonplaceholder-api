<?php

namespace App\Resources;

use GuzzleHttp\Exception\GuzzleException;

class PostsResource extends Resource
{
    /**
     * @throws GuzzleException
     */
    public function add($data) : object
    {
        return $this->client->send('/posts', 'POST', $data);
    }

    /**
     * @throws GuzzleException
     */
    public function update($data) : object
    {
        return $this->client->send("/posts/{$data['id']}", 'PATCH', $data);
    }

    /**
     * @throws GuzzleException
     */
    public function remove($data)
    {
        return $this->client->send("/posts/{$data['id']}", 'DELETE', $data);
    }
}