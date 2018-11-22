<?php
include_once('InheritMath.php');

class ClientInherit{
    private $added;
    private $divided;
    private $textNum;
    private $outPut;

    public function __construct()
    {
        $family = new InheritMath();
        $this->added = $family->simpleAdd(40, 60);
        $this->divided = $family->simpleDivide($this->added, 25);
        $this->textNum = $family->numToText($this->divided);
        $this->outPut = $family->addFace("Your results", $this->textNum);
        echo $this->outPut;
    }
}

$worker = new ClientInherit();