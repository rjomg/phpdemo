<?php
include_once('IFace.php');
class Run implements IFace
{
    function StringMethod()
    {
        // TODO: Implement StringMethod() method.
    }

    function numMethod($intProp)
    {
        // TODO: Implement numMethod() method.
        return $intProp;
    }

    function NoReturnMethod()
    {
        // TODO: Implement NoReturnMethod() method.
    }
}

$a = array(
    '111'
);

$worker = new NorthRegion();
$worker->numMethod($a);