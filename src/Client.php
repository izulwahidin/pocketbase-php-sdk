<?php

namespace Pb;

use UsersCollection;

class Client
{
    private string $response;
    private string $url;
    private string $route;

    public function __construct(string $url)
    {
        $this->response = '{}';
        $this->url = $url;
        $this->users = [];

    }

    public function users()
    {
        return new UsersCollection($this->url, 'records');
    }

    public function collection($url,string $collection, int $page = 1)
    {
        return new Collection($this->url ,$collection);
    }
}