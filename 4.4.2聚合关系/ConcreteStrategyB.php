<?php
include_once('IStrategy.php');

class ConcreteStrategyB implements IStrategy {

    public function algorithm($elements)
    {
        // TODO: Implement algorithm() method.
        echo $elements.'B';
    }
}