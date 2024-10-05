<?php

namespace Conciliara\Broker\Dsl\Builder;

use Conciliara\Broker\Dsl\Contract;

class ContractBuilder
{
  public function parse(array $data): Contract{
    ['consumes' => $consumes] = $data;
    $contract = new Contract();
    $consumesBuilder = new ConsumesBuilder();
    $consumes = $consumesBuilder->parse($consumes);

    $contract->addConsumes($consumes);

    return $contract;
  }
}
