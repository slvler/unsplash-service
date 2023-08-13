<?php

namespace Slvler\UnsplashService;


use GuzzleHttp\Client;
use Slvler\UnsplashService\Services\Photos;
use Slvler\UnsplashService\Services\Stats;


class Unsplash
{
    private $httpClient;

    public function __construct(?Client $client = null)
    {
        $this->httpClient = $client ?: new Client( [
            'base_uri' => $this->getConf()
        ]);
    }

    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }

    public function get_base_uri()
    {
        return config('unsplash.base_uri');
    }

    public function getConf()
    {
        return config('unsplash.base_uri');
    }

    public function getPhotos(): ?Photos
    {
        return new Photos($this);
    }

    public function getStats(): ?Stats
    {
        return new Stats($this);
    }



}
