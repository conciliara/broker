<?php

namespace Conciliara\Broker\Dsl\Builder;

use Conciliara\Broker\Dsl\ConsumesRest;

class ConsumesRestBuilder
{
  public function parse(array $data): ConsumesRest {
    $consumesRest = new ConsumesRest();

    foreach ($data as $endpointsData) {
      $provider = array_shift($endpointsData);

      foreach ($endpointsData as $url => $methodsData) {
        $httpUrlBuilder = new HttpUrlBuilder();
        $httpUrl = $httpUrlBuilder->parse($url, $methodsData);
        $consumesRest->addHttpUrl($provider, $httpUrl);
      }
    }

    return $consumesRest;
  }
}
