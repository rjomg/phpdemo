<?php
include_once ('IMethodHolder.php');
class ImplementAlpha implements IMethodHolder
{
    public function getInfo($info)
    {
        // TODO: Implement getInfo() method.
        echo "This is NEWS!" . $info. "<br>";
    }

    public function sendInfo($info)
    {
        // TODO: Implement sendInfo() method.
        return $info;
    }

    public function calculate($first, $second)
    {
        // TODO: Implement calculate() method.
        $calculated = $first * $second;
        return $calculated;
    }

    public function useMethods()
    {
        $this->getInfo("The sky is falling...");
        echo $this->sendInfo("Vote for Senator Snort!")."<br>";
        echo "You make $" . $this->calculate(20,15) . " in your part-time job";
    }
}

$worker = new ImplementAlpha();
$worker->useMethods();