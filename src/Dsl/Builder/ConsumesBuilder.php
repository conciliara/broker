<?php

namespace Conciliara\Broker\Dsl\Builder;

use Conciliara\Broker\Dsl\Consumes;

class ConsumesBuilder
{
  public function parse(array $data): Consumes {
    ['rest' => $rest] = $data;
    $consumes = new Consumes();
    $consumesRestBuilder = new ConsumesRestBuilder();
    $consumesRest = $consumesRestBuilder->parse($rest);
    $consumes->addConsumesRest($consumesRest);

    return $consumes;
  }
}
