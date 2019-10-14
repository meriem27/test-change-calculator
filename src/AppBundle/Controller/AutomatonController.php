<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AutomatonController extends AbstractController
{
    /**
     * @Route("/automaton/{calculator}/change/{change}", name="automaton", requirements={"change"="\d+"})
     */
    public function index($calculator, $change)
    {
	}
}
