<?php
include_once('OneTrickAbstract.php');
/**
 * 实例类
 */
class OneTrickConcrete extends OneTrickAbstract{

    public function trick($whatever)
    {
        // TODO: Implement trick() method.
        $this->set_storeHere('An abstract property');
        return $whatever . $this->get_storeHere();
    }
}

/**
 * 实例类
 */
class OneTrickConcrete2 extends OneTrickAbstract{

    public function trick($whatever)
    {
        // TODO: Implement trick() method.
        $half = $whatever/2;
        return $half;
    }
}

$worker = new OneTrickConcrete();
echo $worker->trick("From an abstract origin...");

$test = new OneTrickConcrete2();
echo $test->trick("100");
