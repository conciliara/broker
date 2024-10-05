<?php

namespace Conciliara\Broker\Dsl;

class ConsumesRest
{
    public array $httpUrls;

    public function addHttpUrl(string $provider, HttpUrl $httpUrl): void
    {
        $this->httpUrls[$provider] ??= [];
        $this->httpUrls[$provider][] = $httpUrl;
    }
}
