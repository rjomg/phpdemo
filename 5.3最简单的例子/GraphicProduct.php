<?php
include_once ('Product.php');
class TextProduct extends Product
{
    private $mfgProduct;

    function getProperties()
    {
        // TODO: Implement getProperties() method.
        $this->mfgProduct = "This is text";
        return $this->mfgProduct;
    }
}