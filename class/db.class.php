<?php

class Db
{

    private $server = "localhost";
    private $dbName = "student";
    private $userName = "root";
    private $pwd = "";
    private $dns;
    public $con;

    public function __construct()
    {
        try {
            $this->dns = "mysql:host=$this->server;dbname=$this->dbName";
            $this->con = new PDO($this->dns, $this->userName, $this->pwd);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getCon()
    {
        return $this->con;
    }

    public function prepare($sql)
    {
        try {
            $stmt = $this->con->prepare($sql);
            return $stmt;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function query($query)
    {
        try {
            $result = $this->con->query($query);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


}
