<?php

namespace Conciliara\Broker\Dsl;

readonly class HttpRequestBody
{
    public string $schemaName;

    public function __construct(string $schemaName)
    {
        $this->schemaName = $schemaName;
    }
}
