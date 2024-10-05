<?php

namespace Conciliara\Broker\Dsl;

use InvalidArgumentException;

use function Conciliara\Broker\Functions\not;

class HttpMethod
{
    public array $httpStatusCodes = [];

    public HttpRequestBody $requestBody;

    protected array $requestBodyAllowedMethods = ['POST', 'PUT', 'PATCH'];

    protected array $allowedMethods = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'];

    public function __construct(
        public readonly string $methodName
    ) {
        if (not(in_array($this->methodName, $this->allowedMethods))) {
            throw new InvalidArgumentException('Invalid HTTP method');
        }
    }

    public function addRequestBody(HttpRequestBody $requestBody): void
    {
        if (not(in_array($this->methodName, $this->requestBodyAllowedMethods))) {
            throw new InvalidArgumentException('Request body is not allowed for this method');
        }

        $this->requestBody = $requestBody;
    }

    public function addStatusCode(HttpStatusCode $httpStatusCode): void
    {
        $this->httpStatusCodes[] = $httpStatusCode;
    }
}
