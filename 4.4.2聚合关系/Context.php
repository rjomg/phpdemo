<?php
class Context
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