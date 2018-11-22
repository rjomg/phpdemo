<?php
include_once('NorthRegion.php');
include_once('WestRegion.php');

class Client{
    public function __construct(){
        $north = new NorthRegion();
        $west = new WestRegion();
        $this->showInterFace($north);
        $this->showInterFace($west);
    }

    public function showInterFace(IAbstract $region){
        echo $region->displayShow() . "<br />";
    }
}

$worker = new Client();