<?php

namespace Conciliara\Broker\Dsl;

class HttpUrl
{
    public array $httpMethods;

    public function addMethod(string $url, HttpMethod $httpMethod): void
    {
        $this->httpMethods[$url][] = $httpMethod;
    }
}
