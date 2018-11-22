<?php
include_once('Product.php');

class TextFactory extends Product {

    function Hello()
    {
        echo "Hello A";
    }

    public function AnOperation(){
        echo 1;
    }
}