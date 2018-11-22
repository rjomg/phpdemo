<?php
include_once('Creator.php');
include_once('ConProductA.php');
include_once('ConProductB.php');
class ConcreteCreator extends Creator
{
    function factoryMethod($type)
    {
        if ($type == 'A'){
            return new ConProductA();
        }
        if ($type == 'B'){
            return new ConProductB();
        }
        return false;
    }

    // default
    function AnOperation()
    {
        echo "this default";
    }
}