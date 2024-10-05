<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use Conciliara\Broker\Dsl\Builder\ContractBuilder;

$content = Yaml::parseFile('contracts/example.yml');

$builder = new ContractBuilder();
$contract = $builder->parse($content);

print_r($contract->consumes);

