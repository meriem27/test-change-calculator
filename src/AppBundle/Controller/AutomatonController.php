<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Registry\CalculatorRegistry; 

class AutomatonController extends AbstractController
{
    /**
     * @Route("/automaton/{calculator}/change/{change}", name="automaton", requirements={"change"="\d+"})
     */
    public function index($calculator, $change)
    {
    	$registry = new CalculatorRegistry();
    	$calculatorClass = $registry->getCalculatorFor($calculator);
    	$chage = $calculatorClass()->getChange ();
    	return $this->json($change);
	}
}
