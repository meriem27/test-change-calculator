<?php

declare(strict_types=1);

namespace AppBundle\Registry;

use AppBundle\Calculator\CalculatorInterface;
use AppBundle\Calculator\Mk1Calculator;
use AppBundle\Calculator\Mk2Calculator;


class CalculatorRegistry implements CalculatorRegistryInterface
{
   
    public function getCalculatorFor(string $model): ?CalculatorInterface
    {
    	if( $model === 'mk1')
    	{
    		return ''. new Mk1Calculator();

    	}
    	elseif ($model === 'mk2'){
    		return ''. new Mk2Calculator();
    	}
    	else{
    		return null;
    	}
    }
}
