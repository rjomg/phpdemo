<?php
include_once ('ISubject.php');
include_once ('RealSubject.php');

class Proxy extends ISubject
{
    private $realSubject;

    protected function request()
    {
        // TODO: Implement request() method.
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }

    public function login($un, $pw)
    {
        if($un === "Professional" && $pw === "acp"){
            $this->request();
        }else{
            print "Cry 'Havoc,' and let slip the dogs of war!";
        }
    }
}

$worker = new Proxy();
$worker->login("Professional","acp");