<?php

namespace Conciliara\Broker\Dsl\Builder;

use Conciliara\Broker\Dsl\HttpMethod;

class HttpMethodBuilder
{
  public function parse(array $data): HttpMethod {
    $httpMethod = new HttpMethod("");

    return $httpMethod;
  }
}
