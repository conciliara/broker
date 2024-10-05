<?php

namespace Conciliara\Broker\Dsl;

class Consumes
{
    public ConsumesRest $consumesRest;

    public function addConsumesRest(ConsumesRest $consumesRest): void
    {
        $this->consumesRest = $consumesRest;
    }
}
