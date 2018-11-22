<?php
include_once('IStrategy.php');

class ConcreteStrategyA extends ISubject {

    protected function request()
    {
        // TODO: Implement request() method.
        echo 'RealSubject';
    }
}