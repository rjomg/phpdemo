<?php
class DoMath{
    protected $sum;
    protected $quotient;

    // 简单添加
    public function simpleAdd($first, $second){
        $this->sum = ($first + $second);
        return $this->sum;
    }

    // 简单划分
    public function simpleDivide($dividend, $divisor){
        $this->quotient = ($dividend / $divisor);
        return $this->quotient;
    }
}