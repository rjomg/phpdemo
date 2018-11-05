<?php
include_once('IProduct.php');
class FruitStore implements IProduct
{
    function apples()
    {
        // TODO: Implement apples() method.
        return "ProtectVis sez--We have apples. <br />";
    }

    function oranges()
    {
        // TODO: Implement oranges() method.
        return "ProtectVis sez--We have no citrus fruit. <br />";
    }
}