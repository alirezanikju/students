<?php

require_once "class/db.class.php";

class Student
{
    private $con;

    public function __construct()
    {
        $this->con = new Db();
        $this->con->getCon();
    }


//    insert new studet data in database

    public function addStusent($name, $age, $filed)
    {
        try {
            $sql = "INSERT INTO students(name, age, field) VALUES (:name, :age, :field)";
            $result = $this->con->prepare($sql);
            $result->bindValue(":name", $name);
            $result->bindValue(":age", $age);
            $result->bindValue(":field", $filed);
            if ($result->execute()){
                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}

