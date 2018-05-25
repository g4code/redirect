<?php

namespace G4\Redirect;

use G4\PredefinedVariables\Server;
use G4\ValueObject\Url;

class Route
{
    private $path;

    private $url;

    /**
     * Route constructor.
     * @param $path
     */
    public function __construct($path)
    {
        $this->path = $path;
        $this->url = new Url($this->buildUrl());
    }

    private function buildUrl()
    {
        $server = new Server();
        $protocol = $server->isHttps() ? 'https' : 'http';
        $host = $server->httpHost();
        $query = $server->queryString() ? '?' . $server->queryString() : '';

        return $protocol . '://' . $host . $this->path . $query;
    }

    /**
     * @return Url
     */
    public function getUrl()
    {
        return $this->url;
    }
}
