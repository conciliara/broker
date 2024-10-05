<?php

namespace Conciliara\Broker\Dsl\Builder;

use Conciliara\Broker\Dsl\HttpMethod;
use Conciliara\Broker\Dsl\HttpStatusCode;
use Conciliara\Broker\Dsl\HttpUrl;

class HttpUrlBuilder
{
  public function parse(string $url, array $data): HttpUrl {
    $httpUrl = new HttpUrl();

    foreach ($data as $method => $methodData) {
      $httpMethod = new HttpMethod($method);

      foreach ($methodData as $statusCode => $schemaName) {
        $httpStatusCode = new HttpStatusCode($statusCode, $schemaName);

        $httpMethod->addStatusCode($httpStatusCode);
      }

      $httpUrl->addMethod($url, $httpMethod);
    }

    return $httpUrl;
  }
}
