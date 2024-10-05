<?php

namespace Conciliara\Broker\Dsl\Builder;

use Conciliara\Broker\Dsl\Consumes;

class ConsumesBuilder
{
  public function parse(array $data): Consumes {
    $consumes = new Consumes();

    [
      'rest' => $rest,
    ] = $data;

    $consumesRestBuilder = new ConsumesRestBuilder();
    $consumesRest = $consumesRestBuilder->parse($rest);

    $consumes->addConsumesRest($consumesRest);

    return $consumes;
  }
}
