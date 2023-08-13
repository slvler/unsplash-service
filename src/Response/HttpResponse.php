<?php


namespace Slvler\UnsplashService\Response;

use Psr\Http\Message\ResponseInterface;

class HttpResponse
{

    CONST JSON = 'application/json';

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function getBody()
    {

        if ($this->response->getStatusCode() != 200) {
            return;
        }
        if (! str_contains($this->response->getHeaderLine('Content-Type'), self::JSON)) {
            return;
        }

        return $this->response->getBody()->getContents();

    }

    public function toObject(): object
    {
        $body = (string) $this->response->getBody();

        return json_decode($body) ?? (object) [];
    }
}
