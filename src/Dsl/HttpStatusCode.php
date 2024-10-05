<?php

namespace Conciliara\Broker\Dsl;

readonly class HttpStatusCode
{
    public int $statusCode;
    public string $schemaName;

    public function __construct(int $statusCode, string $schemaName)
    {
        $this->statusCode = $statusCode;
        $this->schemaName = $schemaName;
    }
}
