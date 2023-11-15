<?php

namespace AdOceanSdk;

class Application
{
    protected RequestClient $client;

    protected ?OpenApi $openApi = null;

    private function __construct(?RequestClient $client)
    {
        if (!$client) {
            $this->client = RequestClient::make();
        } else {
            $this->client = $client;
        }
    }

    public static function init(?RequestClient $client = null): self
    {
        return new self($client);
    }

    public function apis(): OpenApi
    {
        if (!$this->openApi) {
            $this->openApi = new OpenApi($this->client);
        }

        return $this->openApi;
    }

    public function client(): RequestClient
    {
        return $this->client;
    }
}