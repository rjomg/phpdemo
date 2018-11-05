<?php
include_once('FruitStore.php');
include_once('CitrusStore.php');
class UseProducts
{
    public function __construct()
    {
        $applesSauce = new ProtectVis();
        $orangeJuice = new CitrusStore();
        $this->doInterface($applesSauce);
        $this->doInterface($orangeJuice);
    }

    function doInterface(IProduct $product)
    {
        echo $product->apples();
        echo $product->oranges();
    }
}

$worker = new UseProducts();