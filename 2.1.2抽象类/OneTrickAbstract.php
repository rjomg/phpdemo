<?php
/**
 * 抽象类
 */
abstract class OneTrickAbstract{

    private $storeHere;

    public function get_storeHere(){
        return $this->storeHere;
    }

    public function set_storeHere($storeHere) {
        $this->storeHere  = $storeHere;
    }

    protected abstract function trick($whatever);


}