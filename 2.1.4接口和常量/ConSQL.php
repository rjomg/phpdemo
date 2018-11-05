<?php
include_once('IConnectInfoMethod.php');
class ConSQL implements IConnectInfo
{

    private $sever = IConnectInfo::HOST;
    private $currentDB = IConnectInfo::DBNAME;
    private $user = IConnectInfo::UNAME;
    private $pass = IConnectInfo::PW;

    function testConnection()
    {
        // TODO: Implement testConnection() method.
        $hookup = new mysqli($this->sever,$this->user,$this->pass,$this->currentDB);
        if(mysqli_connect_error()){
            die('bad mojo');
        }

        print "You're hooked up Ace! <br />" . $hookup->host_info;

        $hookup->close();
    }
}

$useConstant = new ConSQL();
$useConstant->testConnection();
