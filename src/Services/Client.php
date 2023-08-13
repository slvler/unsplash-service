<?php

namespace Slvler\UnsplashService\Services;

use Slvler\UnsplashService\Response\HttpResponse;
use Slvler\UnsplashService\Unsplash;

class Client
{
    protected $client;

    protected $transformer;

    public function __construct(Unsplash $client)
    {
        $this->client = $client;
    }

    public function get(string $url)
    {
        $response = $this->client->getHttpClient()->request("GET", $url);
        return new HttpResponse($response);
        $body =  $response->getBody();
        $content = json_decode($body, true);
        return new HttpResponse($content);
    }
}
