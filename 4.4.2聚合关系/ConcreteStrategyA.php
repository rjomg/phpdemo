<?php
include_once('IStrategy.php');

class ConcreteStrategyA implements IStrategy {

    public function algorithm($elements)
    {
        // TODO: Implement algorithm() method.
        echo $elements.'A';
    }
}