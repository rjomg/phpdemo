<?php
include_once('IAbstract.php');
class WestRegion extends IAbstract {

    protected function giveCost()
    {
        // TODO: Implement giveCost() method.
        $solarSavings = 2;
        $this->valueNow = 210.54/$solarSavings;
        return $this->valueNow;
    }

    protected function giveCity()
    {
        // TODO: Implement giveCity() method.
        return "Rattlesnake Gulch";
    }
}