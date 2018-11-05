<?php
include_once('IProduct.php');
class CitrusStore implements IProduct
{
    function apples()
    {
        // TODO: Implement apples() method.
        return "CitrusStore sez--We do not sell apples. <br />";
    }

    function oranges()
    {
        // TODO: Implement oranges() method.
        return "CitrusStore sez--We have citrus fruit. <br />";
    }
}