<?php

namespace Conciliara\Broker\Dsl;

class Contract
{
    public Consumes $consumes;

    public function addConsumes(Consumes $consumes): void
    {
        $this->consumes = $consumes;
    }
}
