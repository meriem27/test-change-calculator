<?php

declare(strict_types=1);

namespace AppBundle\Registry;

use AppBundle\Calculator\CalculatorInterface;

class CalculatorRegistry implements CalculatorRegistryInterface
{
   
    public function getCalculatorFor(string $model): ?CalculatorInterface;
}
