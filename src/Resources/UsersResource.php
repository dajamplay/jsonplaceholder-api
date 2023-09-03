<?php

namespace App\Resources;

use GuzzleHttp\Exception\GuzzleException;

class UsersResource extends Resource
{
    /**
     * @throws GuzzleException
     * @return object[]
     */
    public function list() : array
    {
        return $this->client->send('/users');
    }

    /**
     * @throws GuzzleException
     * @return object[]
     */
    public function posts($userId) : array
    {
        return $this->client->send("/users/{$userId}/posts");
    }

    /**
     * @throws GuzzleException
     * @return object[]
     */
    public function todos($userId) : array
    {
        return $this->client->send("/users/{$userId}/todos");
    }

    /**
     * @throws GuzzleException
     */
    public function user($userId) : object
    {
        return $this->client->send("/users/{$userId}");
    }
}