<?php
include_once('ProtectVis.php');
class ConcreteProtect extends ProtectVis
{

    function __construct()
    {
        $this->countMoney();
    }

    protected function countMoney()
    {
        // TODO: Implement countMoney() method.
        $this->wage = "Your hourly wage is $";
        echo $this->wage . $this->setHourly(36);
    }
}

$worker = new FurryPets();