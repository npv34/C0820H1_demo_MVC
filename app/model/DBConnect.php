<?php
namespace app\model;

use PDO;

class DBConnect
{
    protected $dns;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dns = 'mysql:host=127.0.0.1;dbname=classicmodels';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    public function connect()
    {
        return new PDO($this->dns, $this->username, $this->password);
    }
}