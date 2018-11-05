<?php
interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "root";
    const DBNAME = "test";
    const PW = "root";
    function testConnection();
}