<?php
include_once('InheritMath.php');
class ClientInherit{
    private $added;
    private $divded;
    private $textNum;
    private $outPut;

    public function __construct()
    {
        $family = new InheritMath();
        $this->added = $family->simpleAdd(40, 60);
        $this->divded = $family->simpleDivide($this->added, 25);
        $this->textNum =
    }
}