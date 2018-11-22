<?php
include_once('ConcreteStrategyA.php');
include_once('ConcreteStrategyB.php');
class Context
{
    private $strategy;

    public function __construct(IStrategy $strategy){
        $this->strategy = $strategy;
    }

    public function algorithm($elements){
        $this->strategy->algorithm($elements);
    }
}

$strategy = new ConProductA();
$worker = new Context($strategy);
$worker->algorithm('strategy ');