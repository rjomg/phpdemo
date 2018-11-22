<?php
include_once('Product.php');

class ConProductA extends Product {

    function Hello()
    {
        echo "Hello A";
    }

    public function AnOperation(){
        echo 1;
    }
}